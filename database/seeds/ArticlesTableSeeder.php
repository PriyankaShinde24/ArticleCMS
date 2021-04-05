<?php

use Illuminate\Database\Seeder;
use App\Models\Articles;
use App\User;

class ArticlesTableSeeder extends Seeder
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
        
        for ($i = 0; $i < 10; $i++) {
            Articles::create(
                [
                'user_id' => $faker->randomElement($users),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(),
                ]
            );
        }
    }
}
