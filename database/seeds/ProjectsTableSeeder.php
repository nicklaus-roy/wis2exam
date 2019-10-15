<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
        	'name' => 'Document Tracking System',
        	'description' => 'A document tracking system for a government office'
        ]);
    }
}
