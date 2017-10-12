<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('users')->insert([
            'name' => 'Jónas Daníel Þórisson',
            'email' => 'jonasdthor@gmail.com',
            'password' => bcrypt('password'),
        ]);

    }
}
