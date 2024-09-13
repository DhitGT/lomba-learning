<?php

namespace App\Http\Controllers;

use App\Models\ModulModel;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //
     public function dashboard()
    {
        // Fetch pending posts
        $posts = ModulModel::get();

        return view('admin.dashboard', compact('posts'));
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
