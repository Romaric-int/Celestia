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
          'url' => '/img/diy/fusee.png',

      ]);

      DB::table('diy')->insert([
          'name' => 'Système solaire',
          'url' => '/img/diy/solaire.png',


      ]);

      DB::table('diy')->insert([
          'name' => 'Lampe torche astrale',
          'url' => '/img/diy/lampe.png',


      ]);

      DB::table('game')->insert([
          'name' => 'Les Astronautes',
          'urlVideo' => 'https://www.youtube.com/embed/UIMp6wRsOXA',


      ]);

      DB::table('game')->insert([
          'name' => 'La Lune',
          'urlVideo' => 'https://www.youtube.com/embed/20t5BXhC7Uw',


      ]);

      DB::table('game')->insert([
          'name' => 'Le Système Solaire',
          'urlVideo' => 'https://www.youtube.com/embed/20t5BXhC7Uw',


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
          'planete' => '/img/game/telescope.svg',
          'numImg' => '/img/game/num3.svg',

          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/saturne.svg',
          'numImg' => '/img/game/num4.svg',
          'storyText' => 'testetteete',


      ]);
      DB::table('planetes')->insert([
          'planete' => '/img/game/terre2.svg',
          'numImg' => '/img/game/num5.svg',
          'storyText' => 'testetteete',


      ]);

      DB::table('planetes')->insert([
          'planete' => '/img/game/win.svg',
          'numImg' => '/img/game/num6.svg',
          'storyText' => 'testetteete',


      ]);

    }
}
