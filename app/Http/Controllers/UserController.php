<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

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

    public function index()
    {
        $doctors = Doctor::all();
        return view('index', compact('doctors'));
    }
}
