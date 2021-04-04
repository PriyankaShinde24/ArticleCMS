<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ArticleTag;
use Faker\Generator as Faker;

$factory->define(ArticleTag::class, function (Faker $faker) {

    return [
        'article_id' => $faker->word,
        'tag_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
