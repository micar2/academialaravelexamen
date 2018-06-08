<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Document::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'type' => $faker->name,
        'visibility' => $faker->numberBetween(0,1),
        'content' => $faker->paragraph,
        'category'=> $faker->numberBetween(1,11),
        'user'=> $faker->numberBetween(1,131),
        'remember_token' => str_random(10),
    ];
});
