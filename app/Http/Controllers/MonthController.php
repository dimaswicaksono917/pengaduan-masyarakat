<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MonthController extends Controller
{
    public function index(){
        // $bulan = [
        //     [
        //         'value'=>'01',
        //         'month'=>'january'
        //     ],
        //     [

        //     ]
        // ]


        $total_pengaduan_january = Pengaduan::whereMonth('tgl_pengaduan','01')->count();
        $tanggap_january = Pengaduan::whereMonth('tgl_pengaduan','01')->with('status','selesai')->count();
        $belum_tanggap_january = Pengaduan::whereMonth('tgl_pengaduan','01')->with('status','proses')->count();

        $total_pengaduan_february = Pengaduan::whereMonth('tgl_pengaduan','02')->count();
        $tanggap_february = Pengaduan::whereMonth('tgl_pengaduan','02')->with('status','selesai')->count();
        $belum_tanggap_february = Pengaduan::whereMonth('tgl_pengaduan','02')->with('status','proses')->count();

        $total_pengaduan_maret = Pengaduan::whereMonth('tgl_pengaduan','03')->count();
        $tanggap_maret = Pengaduan::whereMonth('tgl_pengaduan','03')->with('status','selesai')->count();
        $belum_tanggap_maret = Pengaduan::whereMonth('tgl_pengaduan','03')->with('status','proses')->count();

        $total_pengaduan_april = Pengaduan::whereMonth('tgl_pengaduan','04')->count();
        $tanggap_april = Pengaduan::whereMonth('tgl_pengaduan','04')->with('status','selesai')->count();
        $belum_tanggap_april = Pengaduan::whereMonth('tgl_pengaduan','04')->with('status','proses')->count();

        return view('admin.pengaduan.rekapbulan', compact(
        'total_pengaduan_january',
        'tanggap_january',
        'belum_tanggap_january',

        'total_pengaduan_february',
        'tanggap_february',
        'belum_tanggap_february',


        'total_pengaduan_maret',
        'tanggap_maret',
        'belum_tanggap_maret',


        'total_pengaduan_april',
        'tanggap_april',
        'belum_tanggap_april',
    ));
    }

}
