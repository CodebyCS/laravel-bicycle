<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'brand' => $faker->company,
        'model' => $faker->word,
        'color' => $faker->colorName,
        'price' => $faker->randomFloat(2, 150, 3000),
        'user_id' => function()
        {
        return \App\User::query()->inRandomOrder()->first()->id;
        }
    ];
});
