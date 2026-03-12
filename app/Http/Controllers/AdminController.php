<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoctors(Request $request){
        return view('admin.doctors-add');
    }
}
