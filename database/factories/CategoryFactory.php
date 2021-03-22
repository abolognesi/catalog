<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'code' => Str::random(10),
        'name' => $faker->name,
        'description' => $faker->text(100),
        'active' => $faker->randomDigit
    ];
});
