<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Articles;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        $users = User::all()->pluck('id')->toArray();
        $articles = Articles::all()->pluck('id')->toArray();
        
        for ($i = 0; $i < 2; $i++) {
            Comment::create(
                [
                'user_id' => $faker->randomElement($users),
                'article_id' => $faker->randomElement($articles),
                'text' => $faker->sentence,
                ]
            );
        }
    }
}
