<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
               [    'id' => 1,
                   'name' => 'Deportivo',
                   'description' => '2 puertas',	 
                   'state' => 1       	
               ],
               [
                   'id' => 2,
                   'name' => 'Deportivo',
                   'description' => '4 puertas',
                   'state' => 0
               ],
               [
                   'id' => 3,
                   'name' => 'Alto Cilindraje',
                   'description' => '',
                   'state' => 1
               ]
            ]);
    }
}
