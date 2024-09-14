<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class AttendanceKontroller extends Controller
{
    function kehadiran()
    {

        // Fetch data from the database
        $model = CourseModel::get();

        // Pass the data to the view
        return view('kehadiran', compact('model'));
    }
}
