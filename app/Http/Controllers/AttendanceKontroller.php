<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\CourseModel;
use Illuminate\Http\Request;

class AttendanceKontroller extends Controller
{
    public function kehadiran()
    {

        $courses = CourseModel::get();
        $users = User::where('role','user')->get();


        return view('kehadiran', compact('courses','users'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'course' => 'required',
            'user' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        // if ($request->hasFile('imageCover')) {
        //     $imagePath = $request->file('imageCover')->store('images', 'public');
        // } else {
        //     $imagePath = null;
        // }

        // Create a new module entry
        $modul = Attendance::create([
            'name' => $request->input('name'),
            'course_id' => $request->input('course'),
            'student_id' =>  $request->input('user'),
            'date' => $request->input('date'),
            'status' => $request->input('status'),
        ]);

        // Redirect with success message
        return redirect()->route('home')->with('success', 'Module created successfully.');
    }
}
