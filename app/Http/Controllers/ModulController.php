<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ModulModel;
use App\Models\CourseModel;
use Illuminate\Http\Request;

class ModulController extends Controller
{
  public function home()
    {
        // Fetch data from the database
        $modules = CourseModel::get(); // Or use appropriate query to get the data you need

        // Pass the data to the view
        return view('home', compact('modules'));
    }
  public function course()
    {
        // Fetch data from the database
        $modules = ModulModel::where("status",'accepted')->get(); // Or use appropriate query to get the data you need

        // Pass the data to the view
        return view('course', compact('modules'));
    }

public function create()
{

    $categories = [
        ['id' => 1, 'name' => 'Technology'],
        ['id' => 2, 'name' => 'Science'],
        ['id' => 3, 'name' => 'Education'],
        ['id' => 4, 'name' => 'Health'],
        ['id' => 5, 'name' => 'Environment'],
        ['id' => 6, 'name' => 'Business'],
        ['id' => 7, 'name' => 'Entertainment']
    ];

    $teachers = User::where('role','guru')->get();

    return view('course.create', compact('teachers'));
}

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'teacher' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $modul = CourseModel::create([
            'name' => $request->input('title'),
            'description' => $request->input('description'),
            'teacher_id' =>  $request->input('teacher'), 
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect()->route('home')->with('success', 'Module created successfully.');
    }

     public function show($id)
    {

        $module = CourseModel::findOrFail($id);

        // Pass the module data to the view
        return view('module.show', compact('module'));
    }
    //  public function delete($id)
    // {

    //     $module = CourseModel::findOrFail($id)->delete();
    //     return view('home');
    // }

}


