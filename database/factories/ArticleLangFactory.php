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

$factory->define(\App\Models\ArticleLang::class, function (Faker $faker) {
    return [
        'article_id' => function(){
            return factory(\App\Models\Article::class)->create()->id;
        },
        'lang' => 'en',
        'title' => $faker->name,
        'description' => $faker->text(255),
        'contebt' =>$faker->text,
    ];
});
