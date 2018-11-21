<?php

namespace Tests\Feature;

use App\Comment;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_comment_can_be_paginated()
    {
        $post = factory(Post::class)->create();

        $comments = factory(Comment::class, 10)->create([
            'post_id' => $post->id,
        ]);

        $this->get('/api/comments/' . $post->id .'?rows=5')
            ->assertSuccessful()
            ->assertSee($comments[9]->message)
            ->assertDontSee($comments[0]->message);
    }

    /** @test */
    public function if_comment_can_be_created()
    {
        $post = factory(Post::class)->create();

        $this->post('/api/comment', [
            'post_id' => $post->id,
            'name' => 'Juan Palencia',
            'email' => 'juanchopalen@gamil.com',
            'message' => 'Test comment',
        ])->assertSuccessful()
          ->assertJson(['message' => 'Comment registered succesfully']);

        $this->assertDatabaseHas('comments',[
            'post_id' => $post->id,
            'name' => 'Juan Palencia',
            'email' => 'juanchopalen@gamil.com',
            'message' => 'Test comment',
        ]);

    }
}
