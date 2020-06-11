<?php

use Illuminate\Database\Seeder;

class UserSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
    	$userSubjects = [['subjects_id' => '1', 'users_id' => '1'],['subjects_id' => '2', 'users_id' => '2'], ['subjects_id' => '3', 'users_id' => '2']];
        \DB::table('tag_user_subjects') -> insert($userSubjects);

    }
}
