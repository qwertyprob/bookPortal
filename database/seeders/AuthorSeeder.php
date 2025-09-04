<?php

// database/seeders/AuthorSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            ['name' => 'Лев Толстой', 'bio' => 'Русский писатель, автор "Войны и мира".'],
            ['name' => 'Фёдор Достоевский', 'bio' => 'Русский писатель, автор "Преступления и наказания".'],
            ['name' => 'Александр Пушкин', 'bio' => 'Русский поэт, основоположник современной русской литературы.'],
            ['name' => 'Антон Чехов', 'bio' => 'Русский писатель, мастер короткого рассказа.'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
