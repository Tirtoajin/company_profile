<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    function index()
    {
        $data = [
            'content' => 'home/auth/login'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function doLogin(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }

        return back()->with('loginError', 'Gagal Login, Email atau Password tidak ditemukan');
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
