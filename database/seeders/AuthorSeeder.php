<?php

// database/seeders/AuthorSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        //Factory
//        \App\Models\Author::factory(10)->create();
//        \App\Models\Genre::factory(5)->create();
//        \App\Models\Book::factory(20)->create();

        $authors = [
            ['name' => 'Лев Толстой', 'bio' => 'Русский писатель, автор "Войны и мир".'],
            ['name' => 'Фёдор Достоевский', 'bio' => 'Русский писатель, автор "Преступление и наказание".'],
            ['name' => 'Александр Пушкин', 'bio' => 'Русский поэт, основоположник современной русской литературы.'],
            ['name' => 'Антон Чехов', 'bio' => 'Русский писатель, мастер короткого рассказа.'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
