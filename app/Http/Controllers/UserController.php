<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ModulModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
     // Dummy data for multiple users
    private $users = [
        'johndoe' => [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'profile_picture' => 'https://dheep.site/me.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'modules' => [[
                'title' => 'Noteworthy technology acquisitions 2021',
                'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
                'image' => 'https://dheep.site/ritsu-website.PNG',
            ],
            [
                'title' => 'Tech innovations of 2023',
                'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
                'image' => 'https://dheep.site/uncolonized-game.PNG',
            ],
            [
                'title' => 'AI and Machine Learning trends',
                'description' => 'A comprehensive guide on AI and machine learning advancements.',
                'image' => 'https://dheep.site/koppling-website.PNG',
            ],]
        ],
        'janedoe' => [
            'name' => 'Jane Doe',
            'username' => 'janedoe',
            'email' => 'janedoe@example.com',
            'profile_picture' => 'https://dheep.site/me.jpg',
            'bio' => 'Vivamus lacinia odio vitae vestibulum.',
            'modules' => [[
                'title' => 'Noteworthy technology acquisitions 2021',
                'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
                'image' => 'https://dheep.site/ritsu-website.PNG',
            ],
            [
                'title' => 'Tech innovations of 2023',
                'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
                'image' => 'https://dheep.site/uncolonized-game.PNG',
            ],
            [
                'title' => 'AI and Machine Learning trends',
                'description' => 'A comprehensive guide on AI and machine learning advancements.',
                'image' => 'https://dheep.site/koppling-website.PNG',
            ],]
        ],
    ];

     public function show($username)
    {
        // Fetch user data based on username
        $user = User::where('username', $username)->first();

        // If user not found, abort with a 404 error
        if (!$user) {
            abort(404, 'User not found');
        }

        // Fetch modules based on user ID
        $modules = ModulModel::where('userId', $user->id)->get();

        // Pass user and modules data to the view
        return view('profile', compact('user', 'modules'));
    }
}
