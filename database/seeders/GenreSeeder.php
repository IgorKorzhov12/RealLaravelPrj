<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Detective'],
            ['name' => 'Anime'],
            ['name' => 'Biography'],
            ['name' => 'Love novel'],
            ['name' => 'Thriller'],
            ['name' => 'Adventures'],
            ['name' => 'Historical novel'],
            ['name' => 'Mysticism'],
            ['name' => 'Fantasy'],
        ]);
    }
}
