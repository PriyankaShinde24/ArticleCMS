<?php

use Illuminate\Database\Seeder;
use App\Models\Articles;
use App\Models\Tag;
use App\Models\ArticleTag;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
                
        $articles = Articles::all()->pluck('id')->toArray();
        $tags = Tag::all()->pluck('id')->toArray();
        
        for ($i = 0; $i < 10; $i++) {
            ArticleTag::create(
                [                
                'article_id' => $faker->randomElement($articles),
                'tag_id' => $faker->randomElement($tags),                
                ]
            );
        }
    }
}
