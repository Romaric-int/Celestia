<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('diy')->insert([
          'name' => 'Fusée spatiale',
          'url' => '/img/diy/fusée_spa.svg',

      ]);

      DB::table('diy')->insert([
          'name' => 'Système solaire',
          'url' => '/img/diy/solaire_diy.svg',


      ]);

      DB::table('diy')->insert([
          'name' => 'Lampe torche astrale',
          'url' => '/img/diy/torche_diy.svg',


      ]);

      DB::table('game')->insert([
          'name' => 'Les Astronautes',
          'urlVideo' => 'https://www.youtube.com/embed/VhVNXaXJz2w',


      ]);

      DB::table('game')->insert([
          'name' => 'Le Système Solaire',
          'urlVideo' => 'https://www.youtube.com/embed/hfxAzbrnaOU',


      ]);

      DB::table('planetes')->insert([

          'planete' => '/img/game/terre1.svg',
          'numImg' => '/img/game/num1.svg',
          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/lune.svg',
          'numImg' => '/img/game/num2.svg',
          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/num3.svg',
          'numImg' => '',
          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/saturne.svg',
          'numImg' => '/img/game/num3_2.svg',
          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/terre2.svg',
          'numImg' => '/img/game/num4.svg',
          'storyText' => 'testetteete',


      ]);

      DB::table('planetes')->insert([
          'planete' => '/img/game/win.svg',
          'numImg' => '/img/game/num5.svg',
          'storyText' => 'testetteete',


      ]);

    }
}
