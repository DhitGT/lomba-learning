<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ModulModel;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //
     public function dashboard()
    {
        // Fetch pending posts
        $users = User::get();

        return view('admin.dashboard', compact('users'));
    }

    public function acceptPost($id)
    {
        $post = ModulModel::findOrFail($id);
        $post->status = 'accepted';
        $post->save();

        return redirect()->route('admin.dashboard')->with('success', 'Post accepted successfully.');
    }

    public function rejectPost($id)
    {
        $post = ModulModel::findOrFail($id);
        $post->status = 'rejected';
        $post->save();

        return redirect()->route('admin.dashboard')->with('success', 'Post rejected successfully.');
    }
}
