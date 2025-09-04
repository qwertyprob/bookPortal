<?php

// database/seeders/BookSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    public function run()
    {
        $book1 = Book::create([
            'title' => 'Война и мир',
            'description' => 'Исторический роман-эпопея о войне 1812 года.',
            'published_year' => 1869,
            'pages' => 1225,
            'cover_image' => 'https://tolstoy.ru/upload/creativity/fiction/detail/upload/iblock/72e/w-p.jpg'
        ]);

        $book2 = Book::create([
            'title' => 'Преступление и наказание',
            'description' => 'Роман о моральных терзаниях студента.',
            'published_year' => 1866,
            'pages' => 671,
            'cover_image' => 'https://cdn.librarius.md/img/original/prestuplenie-i-nakazanie_1539881499.jpg'
        ]);

        $book3 = Book::create([
            'title' => 'Евгений Онегин',
            'description' => 'Роман в стихах.',
            'published_year' => 1833,
            'pages' => 320,
            'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000718282/COVER/cover1__w340.jpg'
        ]);

        // Привязки
        $book1->authors()->attach(Author::where('name', 'Лев Толстой')->first()->id);
        $book1->genres()->attach([Genre::where('name', 'Роман')->first()->id, Genre::where('name', 'Классика')->first()->id]);

        $book2->authors()->attach(Author::where('name', 'Фёдор Достоевский')->first()->id);
        $book2->genres()->attach(Genre::where('name', 'Роман')->first()->id);

        $book3->authors()->attach(Author::where('name', 'Александр Пушкин')->first()->id);
        $book3->genres()->attach([Genre::where('name', 'Поэзия')->first()->id, Genre::where('name', 'Классика')->first()->id]);
    }
}
