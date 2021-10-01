<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function put()
    {
        Session::put('login', 'Selamat anda berhasil login');
        return redirect()->route('home');
    }

    public function home()
    {
        return view('login.home');
    }

    public function logoutuser()
    {
        Session::forget('login');
        return redirect()->route('login.user');
    }

}
