<?php

namespace App\Http\Controllers;

use App\Models\ModulModel;
use Illuminate\Http\Request;

class ModulController extends Controller
{
  public function home()
    {
        // Fetch data from the database
        $modules = ModulModel::where("status",'accepted')->get(); // Or use appropriate query to get the data you need

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

    return view('create', compact('categories'));
}

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'imageCover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|integer', // Validate that category is an integer and exists
        ]);

        // Handle file upload
        if ($request->hasFile('imageCover')) {
            $imagePath = $request->file('imageCover')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new module entry
        $modul = ModulModel::create([
            'userId' => auth()->id(), // Assuming you are using authentication
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'imageCover' => $imagePath,
            'category' => $request->input('category'),
            'status' => 'pending' // Store the selected category ID
        ]);

        // Redirect with success message
        return redirect()->route('home')->with('success', 'Module created successfully.');
    }

     public function show($id)
    {
        // Retrieve the module by its ID
        $module = ModulModel::findOrFail($id);

        // Pass the module data to the view
        return view('module.show', compact('module'));
    }

}


