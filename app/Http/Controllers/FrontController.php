<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(3);

        return view('welcome', compact('posts'));
    }
}
