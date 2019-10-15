<?php

use App\TaskCategory;
use Illuminate\Database\Seeder;

class TaskCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [
    		['name' => 'To Do'],
    		['name' => 'Doing'],
    		['name' => 'Done']
    	];
        $task_category = TaskCategory::insert($categories);
    }
}
