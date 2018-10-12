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
        DB::table('skills')->insert([
            'title' => 'PHP',
            'percent' => 50,
            'category' => 1,
            'user_id' => 9,
        ]);
    }
}
