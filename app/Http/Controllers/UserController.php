<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

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

    public function viewDoctors()
    {
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));
    }

    public function bookAppointment(Request $request)
    {
        $appointment = new Appointment();
        $appointment->full_name = $request->full_name;
        $appointment->email_address = $request->email_address;
        $appointment->submission_date = $request->submission_date;
        $appointment->speciality =  $request->speciality;
        $appointment->number = $request->number;
        $appointment->message =$request->message;
        $appointment->save();

        return redirect()->back()->with('appointment-success', 'Appointment Booked Successfully');
    }
}
