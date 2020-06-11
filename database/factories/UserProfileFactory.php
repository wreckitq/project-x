<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\UserProfile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'bio' => $faker->text,
    ];
});
