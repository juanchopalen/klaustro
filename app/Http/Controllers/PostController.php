<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        \Log::info(request()->all());
        return Post::search(request()->search)
            ->byDate(request()->month, request()->year)
            ->byCategory(request()->category)
            ->orderBy('id', 'desc')
            ->paginate(request()->rows);
    }

    public function show($slug)
    {
        return Post::where('slug', $slug)->first();
    }
}
