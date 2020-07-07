<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\todo;
use App\User;
use Faker\Generator as Faker;

$factory->define(todo::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'todo' => $faker->sentence
    ];
});
