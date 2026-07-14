<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Country;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birth_date' => $faker->date('Y-m-d', '2005-01-01'),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        // Seleciona um ID aleatório dos países existentes na base de dados
        'country_id' => function(){
            return \App\Country::query()->inRandomOrder()->first()->id;
        }
    ];
});
//A função abaixo faz com que para cada user criado, ele crie duas bicicletas a seguir
/*$factory->afterCreating(App\User::class, function ($user, $faker) {
    factory(App\Bicycle::class, 2)->create(['user_id' => $user->id]);
});*/

