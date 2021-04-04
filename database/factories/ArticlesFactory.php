<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomElement($users),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $faker->image('public/storage/images',400,300, null, false),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
