<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
    	$users = [['first_name'=> 'Michelle', 'email' => 'test1@gmail.com', 'password' => bcrypt('123123123'), 'email_verified_at' => now(), 'contact_num' => Str::random(10), 'remember_token' => Str::random(10)],
        ['first_name'=> 'Sprite', 'email' => 'test2@gmail.com', 'password' => bcrypt('123123123'), 'email_verified_at' => now(), 'contact_num' => Str::random(10), 'remember_token' => Str::random(10)]];
        \DB::table('users') -> insert($users);

    }
}
