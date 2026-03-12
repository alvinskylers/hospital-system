<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoctorsView(Request $request){
        return view('admin.doctors-add');
    }

    public function saveDoctor(Request $request){
        $doctor = new Doctor();
        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_phone = $request->doctor_phone;
        $doctor->doctor_specialty = $request->doctor_specialty;
        $doctor->room_number = $request->room_number;
        $image = $request->doctor_image;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $doctor->doctor_image=$imageName;
        }
        $doctor->save();

        if ( $image && $doctor->save()) {
            $request->doctor_image->move(public_path('images'), $imageName);
        }

        return redirect()->back()->with('success-doctor-added', 'Doctor Added Successfully');
    }
}
