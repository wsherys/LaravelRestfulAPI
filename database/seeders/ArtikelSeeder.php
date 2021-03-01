<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Artikel;
use DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artikels')->truncate();

        DB::table('artikels')->insert([
        'author' => 'Joni',
        'text' => 'Web Designer',
        ]);

        DB::table('artikels')->insert([
        'author' => 'Andi',
        'text' => 'Belajar Laravel vol.1',
        ]);
    }
}
