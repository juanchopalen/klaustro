<?php

use App\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'intro' => $faker->paragraph(2),
        'image' => $faker->imageUrl,
        'content' => $faker->paragraph(5),
        'category_id' => function(){
            return factory(Category::class)->create()->id;
        },
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
    ];
});
