<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => function(){
            return factory(Post::class)->create()->id;
        },
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->paragraph,
    ];
});
