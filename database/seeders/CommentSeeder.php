<?php

namespace Database\Seeders;

use App\Comment;
use App\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (Post::all() as $key => $post) {
			$comments = factory(Comment::class, 10)->create([
				'post_id' => $post->id,
			]);

			factory(Comment::class)->create([
				'post_id' => $post->id,
				'reply' => $comments[rand(1, 9)]->id,
			]);

			factory(Comment::class)->create([
				'post_id' => $post->id,
				'reply' => $comments[rand(1, 9)]->id,
			]);
		}
	}
}
