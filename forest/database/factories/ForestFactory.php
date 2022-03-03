<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Forest;
use Faker\Generator as Faker;

$factory->define(Forest::class, function (Faker $faker) {
    return [
        'ja' => $faker->name,
        'en' => $faker->title
    ];
});
