<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Todo;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(8),
        'completed' => false
    ];
});
