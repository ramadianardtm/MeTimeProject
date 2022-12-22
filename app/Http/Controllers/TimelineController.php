<?php

namespace App\Http\Controllers;
use App\Models\Post;

class TimelineController extends Controller
{
    public function index()
    {
        return view('timeline.index', [
            'title' => "Timeline",
            'posts' => Post::latest('id')->get(),
        ]);
    }
}
