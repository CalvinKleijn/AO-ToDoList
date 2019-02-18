<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
        	'id' => 1,
        	'name' => Str::random(10),
            'list_id' => 1,
        ]);
    }
}
