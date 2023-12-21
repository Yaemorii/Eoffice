<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('halaman/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'Admin') {
                return redirect()->route('halaman.visimisi')->with(['success' => 'Login berhasil!', 'Sukses']);
            } else {
                Auth::logout();
                return redirect()->route('halaman.login')->with('fail', 'Anda Bukan Admin');
            }
        }
    
        toastr()->error('Login gagal. Mohon cek kembali.', 'Error');
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}