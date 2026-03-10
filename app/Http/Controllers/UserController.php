<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard()
    {
        if (Auth::check() && Auth::user()->usertype == 'admin') {
            return view('admin.dashboard');
        }

        if (Auth::check() && Auth::user()->usertype == 'user') {
            return view('dashboard');
        }

        return redirect('/');
    }
}
