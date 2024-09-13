<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function home()
{
    $modules = [
        [
            'title' => 'Noteworthy technology acquisitions 2021',
            'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
            'image' => '/images/sample-1.jpg',
        ],
        [
            'title' => 'Tech innovations of 2023',
            'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
            'image' => '/images/sample-2.jpg',
        ],
        [
            'title' => 'AI and Machine Learning trends',
            'description' => 'A comprehensive guide on AI and machine learning advancements.',
            'image' => '/images/sample-3.jpg',
        ],
        // Add more items as needed
    ];

    return view('home', compact('modules'));
}

}
