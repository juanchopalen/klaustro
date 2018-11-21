<?php

namespace Tests\Feature;

use App\Category;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function if_post_can_be_paginated()
    {
        $posts = factory(Post::class, 4)->create();

        $this->get('/api/posts?rows=3')
            ->assertSuccessful()
            ->assertSee($posts[3]->title)
            ->assertDontSee($posts[0]->title);
    }

    /** @test */
    function if_post_is_finded()
    {
        $searched = factory(Post::class)->create([
            'title' => 'Searched Post',
        ]);

        $other = factory(Post::class)->create([
            'title' => 'Other Post',
        ]);

        $this->get('/api/posts?search=Searched&orderBy=id&desc=true')
             ->assertSuccessful()
             ->assertSee($searched->title)
             ->assertDontSee($other->title);

    }

    /** @test */
    function if_post_is_finded_by_date()
    {
        $searched = factory(Post::class)->create([
            'title' => 'Searched Post',
            'created_at' => '2018-01-01'
        ]);

        $other = factory(Post::class)->create([
            'title' => 'Other Post',
        ]);

        $this->get('/api/posts?month=01&year=2018&orderBy=id&desc=true')
             ->assertSuccessful()
             ->assertSee($searched->title)
             ->assertDontSee($other->title);

    }

    /** @test */
    function if_post_is_finded_by_category()
    {
        $searched = factory(Category::class)->create();

        $other = factory(Category::class)->create();

        $search_post = factory(Post::class)->create([
            'category_id' => $searched
        ]);

        $other_post = factory(Post::class)->create([
            'category_id' => $other
        ]);


        $this->get('/api/posts?category=' . $searched->id)
             ->assertSuccessful()
             ->assertSee($search_post->title)
             ->assertDontSee($other_post->title);

    }

    /** @test */
    function if_post_is_showed()
    {
        $post = factory(Post::class)->create([
            'title' => 'Searched Post',
            'slug' => 'searched-post'
        ]);

        $this->get('/api/post/searched-post')
            ->assertSuccessful()
            ->assertSee($post->title);
    }
}
