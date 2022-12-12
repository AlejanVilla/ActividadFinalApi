<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
               [    'id' => 1,
                   'name' => 'Roberto Gómez',
                   'email' => 'robet@hotmail.com',	
                   'password' => " "    	
                ],
               [
                   'id' => 2,
                   'name' => 'Sara H',
                   'email' => 'h1@gmail.com',                   
                   'password' => " "
               ],
               [
                   'id' => 3,
                   'name' => 'Carla Cabello',
                   'email' => 'carlac@gmail.com',                   
                   'password' => " "
               ],
            ]);
    }
}