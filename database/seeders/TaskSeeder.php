<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $userStoryTasks = DB::table('user_story_tasks')->pluck('id');
        $users = DB::table('users')->pluck('id');
        $statuses = ['ready', 'on_hold', 'in_progress', 'in_review', 'done'];

        foreach ($userStoryTasks as $userStoryTaskId) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('tasks')->insert([
                    'user_story_task_id' => $userStoryTaskId,
                    'name' => 'Task ' . Str::random(10),
                    'description' => 'Description for Task ' . $i,
                    'assigned_to' => $users->isNotEmpty() ? $users->random() : null,
                    'due_date' => now()->addDays(rand(1, 30)),
                    'position' => $i,
                    'status' => $statuses[array_rand($statuses)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
