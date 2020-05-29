<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\MissionStatus;
use Faker\Generator as Faker;
use Modules\Mission\Models\Mission;

$factory->define(Mission::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(5, true),
        'reward' => $faker->randomElement([100000, 500000, 1000000]),
        'level' => \App\Enums\Level::getRandomKey(),
        'owner_id' => 1,
        'status' => MissionStatus::DRAFT,
        'due_date' => $faker->dateTimeBetween('+10 day', '+1 month'),
        'bid_closed_at' => $faker->dateTimeBetween('+1 day', '+9 day'),
    ];
});

$factory->afterCreating(Mission::class, function (Mission $mission, Faker $faker) {
    $tags = [
        'php', 'java', 'laravel', 'springboot',
        'pentaho', 'camunda', 'bpmn',
        'vuejs', 'angular', 'react',
    ];
    $mission->syncTags($faker->randomElements($tags, 3));

    $bidders = factory(\App\User::class)->times(3)->create();
    $mission->bidders()->sync($bidders);

    if (in_array($mission->status, [MissionStatus::ONPROGRESS, MissionStatus::COMPLETED])) {
        $mission->bidders()->attach($mission->assignee, ['status' => \App\Enums\BidStatus::WIN]);
    }
});

$factory->state(
    Mission::class,
    MissionStatus::PUBLISHED,
    function (Faker $faker) {
        return [
            'status' => MissionStatus::PUBLISHED,
        ];
    });

$factory->state(
    Mission::class,
    MissionStatus::ONPROGRESS,
    function (Faker $faker) {
        return [
            'assignee_id' => factory(\App\User::class)->create(),
            'status' => MissionStatus::ONPROGRESS,
        ];
    });

$factory->state(
    Mission::class,
    MissionStatus::COMPLETED,
    function (Faker $faker) {
        return [
            'status' => MissionStatus::COMPLETED,
            'assignee_id' => factory(\App\User::class)->create(),
            'due_date' => $faker->dateTimeBetween('-10 day', '-1 day'),
            'completion_date' => $faker->dateTimeBetween('-10 day', 'today'),
        ];
    });
