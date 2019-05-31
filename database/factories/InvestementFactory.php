<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Investment;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Investment::class, function (Faker $faker) {
    $amount = rand(100, 1000);
    $percent = rand(800, 1500)/10000;
    return [
        'amount' => $amount,
        'limit' => $amount * 2,
        'percent' => $percent,
        'retirement' => $amount * $percent * 0.07,
    ];
});
