<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AboutUs;
use Faker\Generator as Faker;

$factory->define(AboutUs::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text(100),
    ];
});