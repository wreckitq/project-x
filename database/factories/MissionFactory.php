<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Modules\Mission\Models\Mission::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(5, true),
        'reward' => $faker->randomElement([100000, 500000, 1000000]),
        'level' => \App\Enums\Level::getRandomKey(),
        'owner_id' => 1,
        'status' => \App\Enums\MissionStatus::DRAFT,
        'due_date' => $faker->dateTimeBetween('+1 day', '+1 month'),
    ];
});
