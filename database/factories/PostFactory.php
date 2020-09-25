<?php

use App\Category;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'image' => $faker->imageUrl,
		'slug' => Str::slug($faker->sentence),
		'category_id' => function () {
			return factory(Category::class)->create()->id;
		},
		'user_id' => function () {
			return factory(User::class)->create()->id;
		},
	];
});
