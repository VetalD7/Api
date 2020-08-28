<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

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

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    return [
        'link' => $faker->unique()->name,
        'status' => $faker->numberBetween(0,1),
        'publication_at' => now(),
    ];
});
