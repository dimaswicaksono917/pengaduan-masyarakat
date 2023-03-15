<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatatableController extends Controller
{


    public function pengaduanProgres(){
        $data = Pengaduan::with('masyarakat')->where('status', 'proses')->get();
        return datatables()->of($data)
        ->editColumn('tgl_pengaduan', function($row){
            return date('d F Y', strtotime($row->tgl_pengaduan));
        })
        ->addColumn('action', function($row){
            $id = $row->no_pengaduan;
            $output = '<button type="button" onclick="responseAduan(\'' . $id . '\')" class="btn btn-success">Tanggapi Pengaduan</button>';
            return $output;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function pengaduanDone(){
        $data = Pengaduan::with('masyarakat')->where('status', 'selesai')->get();
        return datatables()->of($data)
        ->editColumn('tgl_pengaduan', function($row){
            return date('d F Y', strtotime($row->tgl_pengaduan));
        })
        ->addColumn('action', function($row){
            $id = $row->no_pengaduan;
            $output = '<button type="button" onclick="responseAduan(\'' . $id . '\')" class="btn btn-success">Lihat Tanggapan</button>';
            return $output;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function petugas(){
        $data = Admin::where('level', 'petugas')->get();
        return datatables()->of($data)
        ->addColumn('action', function($row){
            $id = $row->id_petugas;
            $output = '<button type="button" onclick="deleteData(\'' . $id . '\')" class="btn btn-danger">Hapus Petugas</button>';
            return $output;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
