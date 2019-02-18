<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        	'id' => 1,
        	'title' => Str::random(10),
        	'body' => Str::random(50),
        ]);
    }
}
