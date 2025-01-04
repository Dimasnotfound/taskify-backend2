<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserStoryTaskSeeder extends Seeder
{
    public function run()
    {
        $projects = DB::table('projects')->pluck('id');

        foreach ($projects as $projectId) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('user_story_tasks')->insert([
                    'project_id' => $projectId,
                    'name' => 'User Story Task ' . Str::random(10),
                    'position' => $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
