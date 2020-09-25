<?php

namespace App\Http\Controllers;

use App\Post;
use App\Row;
use App\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
			rename(public_path() . '/' . $file_name, public_path() . $folder . $file_name);
		}

		$post = new Post;
		$post->image = is_array(request()->image)
			? $folder . $file_name
			: '';
		$post->slug = Str::slug(request()->title);
		$post->category_id = request()->category_id;
		$post->user_id = request()->user_id;
		$post->save();

		$this->storeTranslations($post);

		return [
			'message' => 'Post stored successful',
			'post' => $post,
		];
	}

	protected function storeTranslations(Post $post)
	{
		if (request()->method() == 'POST') {
			$post->row()->save(new Row);
		} else {
			$post->row->translations()->where('language_id', request()->language_id)->delete();
		}

		$keys = ['title', 'intro', 'content'];

		foreach ($keys as $key) {
			$post->row->translations()->create([
				'language_id' => request()->language_id,
				'key' => $key,
				'value' => request()[$key],
			]);
		}
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
			rename(public_path() . '/' . $file_name, public_path() . $folder . $file_name);
		}

		$post = Post::find($id);
		$post->image = is_array(request()->image)
			? $folder . $file_name
			: request()->image;
		$post->slug = Str::slug(request()->title);
		$post->category_id = request()->category_id;
		$post->slug = Str::slug(request()->title);
		$post->save();

		$this->storeTranslations($post);

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
