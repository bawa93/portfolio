<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Skill::class, 20)->create();
        factory(App\Project::class, 50)->create();

        $skills = \App\Skill::pluck('id');

        App\Project::all()->each(function ($project) use ($skills) {
            // \Log::info($project);
            \Log::info($skills);
            $project_obj = \App\Project::find($project->id);
            $project_obj->skills()->attach($skills[array_rand($skills->toArray())]);
        });
    }
}
