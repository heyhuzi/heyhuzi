<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();

        $faker = \Faker\factory::create();

        $status = array('draft', 'analyzing', 'pending', 'published', 'withdraw', 'refused', 'forbidden', 'reported');

        for ($i = 0; $i < 50; $i ++) {
            Task::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'due' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
                'tags' => $faker->word,
                // 'attachments' => $faker->file($sourceDir = '/tmp', $targetDir = '/tmp'),
                'workflow' => $faker->randomNumber,
                'status' => $faker->randomElement($status),
                'subtasks' => $faker->randomNumber,
                'project' => $faker->randomNumber,
                'creater' => $faker->name,
                'owner' => $faker->name,
                'followers' => $faker->name
            ]);
        }
    }
}
