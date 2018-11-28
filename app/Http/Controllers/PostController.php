<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
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

    public function store()
    {
        if (is_array(request()->image)) {
            $image = request()->image;
            $Base64Img = $image['dataURL'];
            $file_name = $image['upload']['filename'];
            $folder = '/images/posts/';
            list(, $Base64Img) = explode(';', $Base64Img);
            list(, $Base64Img) = explode(',', $Base64Img);
            $Base64Img = base64_decode($Base64Img);
            $file = file_put_contents($file_name, $Base64Img);
            rename(public_path().'/'.$file_name,public_path().$folder.$file_name);
        }

        $post = new Post;
        $post->title = request()->title;
        $post->intro = request()->intro;
        $post->image = is_array(request()->image)
                        ? $folder . $file_name
                        : '';
        $post->content = request()->content;
        $post->slug = str_slug(request()->title);
        $post->category_id = request()->category_id;
        $post->user_id = request()->user_id;
        $post->save();

        return [
            'message' => 'Post stored successful',
            'post' => $post,
        ];
    }

    public function update($id)
    {
        if (is_array(request()->image)) {
            $image = request()->image;
            $Base64Img = $image['dataURL'];
            $file_name = $image['upload']['filename'];
            $folder = '/images/posts/';
            list(, $Base64Img) = explode(';', $Base64Img);
            list(, $Base64Img) = explode(',', $Base64Img);
            $Base64Img = base64_decode($Base64Img);
            $file = file_put_contents($file_name, $Base64Img);
            rename(public_path().'/'.$file_name,public_path().$folder.$file_name);
        }

        $post = Post::find($id);
        $post->title = request()->title;
        $post->intro = request()->intro;
        $post->image = is_array(request()->image)
                        ? $folder . $file_name
                        : request()->image;
        $post->content = request()->content;
        $post->slug = str_slug(request()->title);
        $post->category_id = request()->category_id;        $post->slug = str_slug(request()->title);
        $post->save();

        return [
            'message' => 'Post updated successful',
            'post' => $post
        ];
    }

    public function delete($id)
    {
        $post = Post::destroy($id);

        return ['message' => 'Post deleted successful'];
    }
}
