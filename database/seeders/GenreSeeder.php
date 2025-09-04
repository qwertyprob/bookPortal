<?php

// database/seeders/GenreSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = ['Роман', 'Классика', 'Поэзия', 'Драма'];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
