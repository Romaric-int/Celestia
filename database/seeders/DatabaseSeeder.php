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
    }
}
