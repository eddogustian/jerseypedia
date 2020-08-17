<?php

use Illuminate\Database\Seeder;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'name' => 'Bundes Liga',
        	'negara' => 'Jerman',
        	'images' => 'bundesliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Premier League',
        	'negara' => 'Inggris',
        	'images' => 'premierleague.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'La Liga',
        	'negara' => 'Spanyol',
        	'images' => 'laliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Serie A',
        	'negara' => 'Itali',
        	'images' => 'seriea.png',
        ]);
    }
}
