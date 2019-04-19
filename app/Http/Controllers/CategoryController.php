<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::has('posts')->paginate(request()->rows);
    }

    public function list()
    {
        return Category::all();
    }
}
