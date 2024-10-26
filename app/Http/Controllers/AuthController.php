<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        $active = "login";
        return view('auth.login', compact('active'));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::alert('Berhasil', 'selamat ! anda berhasil masuk !', 'success');
            return redirect('/')->with('success', 'Selamat ! anda berhasil Masuk');
        }
        return redirect()->back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {

        $title = 'Apakah Anda ingin Logout !';
        $text = "pastikan semua progress sudah tersimpan!";
        confirmDelete($title, $text);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
