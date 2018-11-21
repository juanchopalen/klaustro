<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @test */
    public function if_category_can_be_paginated()
    {
        factory(Category::class)->create([
            'name' => 'Unsearched category'
        ]);

        $categories = factory(Category::class, 4)->create();

        factory(Category::class)->create([
            'name' => 'Searched category'
        ]);

        $this->get('/api/categories?rows=5')
            ->assertSuccessful()
            ->assertSee('Searched category')
            ->assertDontSee('Unsearched category');
    }
}
