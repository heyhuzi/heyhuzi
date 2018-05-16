<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        $status = array('draft', 'analyzing', 'pending', 'published', 'withdraw', 'refused', 'forbidden', 'reported');
        $type = array('news', 'video', 'gallery');

        for ($i = 0; $i < 50; $i ++) {
            Article::create([
                'title' => $faker->sentence,
                'subtitle' => $faker->sentence,
                'content' => $faker->paragraph,
                'writer' => $faker->name,
                'editor' => $faker->word,
                'status' => $faker->randomElement($status),
                'type' => $faker->randomElement($type),
                'tags' => $faker->word,
                'channel' => $faker->word
            ]);
        }
    }
}
