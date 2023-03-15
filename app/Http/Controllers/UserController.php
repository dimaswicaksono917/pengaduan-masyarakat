<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // register
    public function register()
    {
        return view('auth.register');
    }

    public function registerpost(Request $request)
    {
        $validate = $request->validate([
            'nik' => 'required|max:16|unique:masyarakat,nik',
            'nama' => 'required',
            'username' => 'required|unique:masyarakat,username|unique:petugas,username',
            'password' => 'required',
            'telp' => 'required|unique:masyarakat,telp|unique:petugas,telp',
        ]);
        try {
            $validate['password'] = Hash::make($request->password);
            Masyarakat::create($validate);
            return redirect()->route('login')->with('message', 'Registrasi Berhasil');
        } catch (\Throwable) {
            return back()->with('error', 'Sepertinya ada yang salah');
        }
    }


    // login
    public function login()
    {
        return view('auth.login');
    }
    public function loginpost(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('landing');
        }


        return back()->withErrors([
            'username' => 'Login gagal.',
        ])->onlyInput('username');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('landing')->with('message','Logout Berhasil');
    }
}
