<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function pengaduan(){
        return view('createPengaduan');
    }

    public function postpengaduan(Request $request){
        $request->validate([
            'isi_laporan' => 'required',
            'foto' => 'required|mimes:png,jpg'
        ]);
        $code = $this->pengaduanCode();
        if ($request->hasFile('foto')) {
            $file_name = time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->move(public_path('img/pengaduan'), $file_name);
            Pengaduan::insert([
                 'no_pengaduan' => $code,
                'nik' => Auth::user()->nik,
                'tgl_pengaduan' => Carbon::now(),
                'isi_laporan' => $request->isi_laporan,
                'foto' => $file_name
            ]);
            return redirect()->route('masyarakatpengaduanku')->with('success' , 'Berhasil mengupload pengaduan');
        }
    }

    public function tanggapanDetail($no_pengaduan){
        $data = Pengaduan::with('masyarakat')->where('no_pengaduan', $no_pengaduan)->where('nik', Auth::user()->nik)->firstOrFail();
        if ($data->status == 'selesai') {
            $tanggapan = Tanggapan::with('petugas')->where('id_pengaduan', $data->id_pengaduan)->first();
            return view('masyarakat.tanggapan.detail', compact('data', 'tanggapan'));
        }else{
            abort(404);
        }
    }

    public function destroypengaduan($no_pengaduan){
        $data = Pengaduan::where('no_pengaduan', $no_pengaduan)->where('nik', Auth::user()->nik)->first();
        if ($data) {
            if ($data->status == 'proses') {
                $data->delete();
                    return redirect()->route('masyarakatpengaduanku')->with('success' , 'Berhasil menghapus pengaduan');
            }else{
                return redirect()->route('masyarakatpengaduanku')->with('danger' , 'Pengaduan Ditanggapi, Tidak Bisa Dihapus');
            }
        }else{
            return [
                'statusCode' => 404,
                'message' => 'Data pengaduan tidak ditemukan'
            ];
        }
    }

    public function pengaduanku(){
        $me = Auth::guard('masyarakat')->user();
        $total = Pengaduan::where('nik', $me->nik)->count();
        // $datap = Pengaduan::with('masyarakat')->where('no_pengaduan', $no_pengaduan)->firstOrFail();
        $data = Pengaduan::where('nik', $me->nik)->get();
        return view('pengaduanku',compact('data','me','total'));
    }

    protected function pengaduanCode(){
        $str = Str::random(20);
        $data = Pengaduan::where('no_pengaduan', $str)->first();
        if ($data) {
            return $this->pengaduanCode();
        }
        return $str;
    }

}

