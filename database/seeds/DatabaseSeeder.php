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

      DB::table('threads')->insert([
        ['title' => 'Titill A', 'body' => 'Body fyrir titil A', 'user_id' => 1],
        ['title' => 'Titill B', 'body' => 'Body fyrir titil B', 'user_id' => 1],
        ['title' => 'Titill C', 'body' => 'Body fyrir titil C', 'user_id' => 1],
        ['title' => 'Titill D', 'body' => 'Body fyrir titil D', 'user_id' => 1],
        ['title' => 'Titill E', 'body' => 'Body fyrir titil E', 'user_id' => 1],
      ]);

      DB::table('leikstjori')->insert([
        ['nafn' => 'Ragnar P. Ragnarsson', 'thjoderni' => 'Ísland'],
        ['nafn' => 'James Gatz', 'thjoderni' => 'England'],
        ['nafn' => 'Beggi Helga', 'thjoderni' => 'Ísland'],
        ['nafn' => 'W.C. Bartek', 'thjoderni' => 'Kanada'],
        ['nafn' => 'Wibe Lund', 'thjoderni' => 'Danmörk'],
      ]);

      DB::table('dvd')->insert([
        ['titill' => 'Vindurinn er blautur', 'adalleikari' => 'Pétur Selland', 'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'spenna', 'leikstjori_id' => 5],
        ['titill' => 'Veiðidellan er frabær', 'adalleikari' => 'Gústaf Gústafsson', 'utgafuar' => 1999, 'verd' => 3550, 'flokkur' => 'sport', 'leikstjori_id' => 1],
        ['titill' => 'Into the Wild', 'adalleikari' => 'John Johnson', 'utgafuar' => 2003, 'verd' => 3770, 'flokkur' => 'drama', 'leikstjori_id' => 4],
        ['titill' => 'The Strider', 'adalleikari' => 'Biff Holmes', 'utgafuar' => 1969, 'verd' => 4520, 'flokkur' => 'ævintyri', 'leikstjori_id' => 2],
      ]);

    }
}
