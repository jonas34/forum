<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
          'insert into users (name, email, password) values (?, ?, ?)',
          ['Jónas Daníel Þórisson', 'jonasdthor@gmail.com', 'password']
        );
    }
}
