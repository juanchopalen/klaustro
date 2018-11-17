<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     *
     * @test
     */
    public function if_post_can_pe_paginated()
    {
        $posts = factory(Post::class, 4)->create();

        $this->get('/api/posts?rows=3')
            ->assertSuccessful()
            ->assertSee($posts[3]->title)
            ->assertDontSee($posts[0]->title);
    }
}
