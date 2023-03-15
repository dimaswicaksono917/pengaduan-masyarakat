<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $total_pengaduan = Pengaduan::count();
        return view('landing',compact('total_pengaduan'));
    }
}
