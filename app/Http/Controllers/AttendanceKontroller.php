<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class AttendanceKontroller extends Controller
{ 
    function kehadiran()
    {
        return view('kehadiran');

        // Fetch data from the database
        $model = CourseModel::get();

        // Pass the data to the view
        return view('home', compact('modules'));
    }
}
