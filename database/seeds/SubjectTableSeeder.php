<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
    	$subjects = [['id' => '1', 'name'=> 'MySQL'],['id' => '2', 'name'=> 'PHP'], ['id' => '3', 'name'=> 'English'],['id' => '4', 'name'=> 'History'] ];
        \DB::table('subjects') -> insert($subjects);

    }
}
