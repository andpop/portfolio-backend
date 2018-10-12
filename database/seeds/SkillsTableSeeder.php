<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
