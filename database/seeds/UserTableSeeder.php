<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name'     =>  'Rafik Kamal',
        	'email'    =>  'rafik.rkn@gmail.com',
        	'password' =>  \Hash::make('123'),
        ]);
    }
}
