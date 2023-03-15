<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengaduan;
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
        if ($request->hasFile('foto')) {
            $file_name = time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->move(public_path('img/pengaduan'), $file_name);
            Pengaduan::insert([
                'nik' => Auth::user()->nik,
                'tgl_pengaduan' => Carbon::now(),
                'isi_laporan' => $request->isi_laporan,
                'foto' => $file_name
            ]);
            return redirect()->route('masyarakatpengaduanku')->with('success' , 'Berhasil mengupload pengaduan');
        }
    }

    public function pengaduanku(){
        $me = Auth::guard('masyarakat')->user();
        $total = Pengaduan::where('nik', $me->nik)->count();
        $data = Pengaduan::all()->first();
        return view('pengaduanku',compact('data','me','total'));
    }


}
