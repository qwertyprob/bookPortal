<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'Война и мир',
                'description' => 'Исторический роман-эпопея о войне 1812 года.',
                'published_year' => 1869,
                'pages' => 1225,
                'cover_image' => 'https://simg.marwin.kz/media/catalog/product/cache/41deb699a7fea062a8915debbbb0442c/c/o/cover1__w600_55_171.jpg',
                'author' => 'Лев Толстой',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Преступление и наказание',
                'description' => 'Роман о моральных терзаниях студента.',
                'published_year' => 1866,
                'pages' => 671,
                'cover_image' => 'https://cdn.librarius.md/img/original/prestuplenie-i-nakazanie_1539881499.jpg',
                'author' => 'Фёдор Достоевский',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Евгений Онегин',
                'description' => 'Роман в стихах.',
                'published_year' => 1833,
                'pages' => 320,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000718282/COVER/cover1__w340.jpg',
                'author' => 'Александр Пушкин',
                'genres' => ['Поэзия', 'Классика']
            ],
            [
                'title' => 'Братья Карамазовы',
                'description' => 'Философский роман о семье и вере.',
                'published_year' => 1879,
                'pages' => 900,
                'cover_image' => 'https://www.moscowbooks.ru/image/book/726/orig/i726380.jpg',
                'author' => 'Фёдор Достоевский',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Мастер и Маргарита',
                'description' => 'Мистический роман о любви и дьяволе.',
                'published_year' => 1967,
                'pages' => 480,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000765343/COVER/cover1__w600.jpg',
                'author' => 'Михаил Булгаков',
                'genres' => ['Роман', 'Мистика', 'Классика']
            ],
            [
                'title' => 'Отцы и дети',
                'description' => 'Роман о конфликте поколений.',
                'published_year' => 1862,
                'pages' => 360,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000758095/COVER/cover1__w600.jpg',
                'author' => 'Иван Тургенев',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Дубровский',
                'description' => 'История любви и мести.',
                'published_year' => 1841,
                'pages' => 250,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000780961/COVER/cover1__w600.jpg',
                'author' => 'Александр Пушкин',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Герой нашего времени',
                'description' => 'Психологический роман в новеллах.',
                'published_year' => 1840,
                'pages' => 320,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000717563/COVER/cover1__w600.jpg',
                'author' => 'Михаил Лермонтов',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Идиот',
                'description' => 'История князя Мышкина.',
                'published_year' => 1869,
                'pages' => 700,
                'cover_image' => 'https://cdn.litres.ru/pub/c/elektronnaya-kniga/cover_max1500/106663-fedor-dostoevskiy-idiot.jpg',
                'author' => 'Фёдор Достоевский',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Анна Каренина',
                'description' => 'Трагическая история любви.',
                'published_year' => 1878,
                'pages' => 864,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000777797/COVER/cover1__w600.jpg',
                'author' => 'Лев Толстой',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Мёртвые души',
                'description' => 'Поэма в прозе о России XIX века.',
                'published_year' => 1842,
                'pages' => 352,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000717593/COVER/cover1__w600.jpg',
                'author' => 'Николай Гоголь',
                'genres' => ['Роман', 'Сатира', 'Классика']
            ],
            [
                'title' => 'Шинель',
                'description' => 'Повесть о маленьком человеке.',
                'published_year' => 1842,
                'pages' => 96,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000757315/COVER/cover1__w600.jpg',
                'author' => 'Николай Гоголь',
                'genres' => ['Повесть', 'Классика']
            ],
            [
                'title' => 'Белая гвардия',
                'description' => 'Роман о гражданской войне.',
                'published_year' => 1925,
                'pages' => 350,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000780955/COVER/cover1__w600.jpg',
                'author' => 'Михаил Булгаков',
                'genres' => ['Роман', 'История']
            ],
            [
                'title' => 'Доктор Живаго',
                'description' => 'История любви на фоне революции.',
                'published_year' => 1957,
                'pages' => 600,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000758045/COVER/cover1__w600.jpg',
                'author' => 'Борис Пастернак',
                'genres' => ['Роман', 'История']
            ],
            [
                'title' => 'Тихий Дон',
                'description' => 'Эпопея о донских казаках.',
                'published_year' => 1940,
                'pages' => 1600,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000770811/COVER/cover1__w600.jpg',
                'author' => 'Михаил Шолохов',
                'genres' => ['Роман', 'История', 'Классика']
            ],
            [
                'title' => 'Капитанская дочка',
                'description' => 'Историческая повесть.',
                'published_year' => 1836,
                'pages' => 200,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000758239/COVER/cover1__w600.jpg',
                'author' => 'Александр Пушкин',
                'genres' => ['История', 'Классика']
            ],
            [
                'title' => 'Дети Арбата',
                'description' => 'Роман о жизни в СССР 30-х годов.',
                'published_year' => 1987,
                'pages' => 480,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000778981/COVER/cover1__w600.jpg',
                'author' => 'Анатолий Рыбаков',
                'genres' => ['Роман', 'История']
            ],
            [
                'title' => 'Собачье сердце',
                'description' => 'Сатира на советскую власть.',
                'published_year' => 1925,
                'pages' => 150,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000757881/COVER/cover1__w600.jpg',
                'author' => 'Михаил Булгаков',
                'genres' => ['Сатира', 'Классика']
            ],
            [
                'title' => 'Нос',
                'description' => 'Фантастическая повесть.',
                'published_year' => 1836,
                'pages' => 80,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000757299/COVER/cover1__w600.jpg',
                'author' => 'Николай Гоголь',
                'genres' => ['Повесть', 'Сатира']
            ],
            [
                'title' => 'Обломов',
                'description' => 'Роман о лени и бездействии.',
                'published_year' => 1859,
                'pages' => 480,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000757935/COVER/cover1__w600.jpg',
                'author' => 'Иван Гончаров',
                'genres' => ['Роман', 'Классика']
            ],
            [
                'title' => 'Чевенгур',
                'description' => 'Философский роман о революции.',
                'published_year' => 1929,
                'pages' => 550,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000758113/COVER/cover1__w600.jpg',
                'author' => 'Андрей Платонов',
                'genres' => ['Роман', 'Философия']
            ],
            [
                'title' => 'Записки из подполья',
                'description' => 'Философская повесть.',
                'published_year' => 1864,
                'pages' => 200,
                'cover_image' => 'https://cdn.litres.ru/pub/c/elektronnaya-kniga/cover_max1500/181155-fedor-dostoevskiy-zapiski-iz-podpolya.jpg',
                'author' => 'Фёдор Достоевский',
                'genres' => ['Философия', 'Классика']
            ],
            [
                'title' => 'Человек в футляре',
                'description' => 'Повесть о страхе перед жизнью.',
                'published_year' => 1898,
                'pages' => 120,
                'cover_image' => 'https://cdn.ast.ru/v2/ASE000000000757473/COVER/cover1__w600.jpg',
                'author' => 'Антон Чехов',
                'genres' => ['Повесть', 'Классика']
            ],
            [
                'title' => 'Вишнёвый сад',
                'description' => 'Пьеса о судьбе дворянской усадьбы.',
                'published_year' => 1904,
                'pages' => 150,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000758165/COVER/cover1__w600.jpg',
                'author' => 'Антон Чехов',
                'genres' => ['Драма', 'Классика']
            ],
            [
                'title' => 'Три сестры',
                'description' => 'Драма о провинциальной жизни.',
                'published_year' => 1901,
                'pages' => 130,
                'cover_image' => 'https://cdn.eksmo.ru/v2/ASE000000000758169/COVER/cover1__w600.jpg',
                'author' => 'Антон Чехов',
                'genres' => ['Драма', 'Классика']
            ]
        ];

        foreach ($books as $bookData) {
            $book = Book::create([
                'title' => $bookData['title'],
                'description' => $bookData['description'],
                'published_year' => $bookData['published_year'],
                'pages' => $bookData['pages'],
                'cover_image' => $bookData['cover_image']
            ]);

            // Автор
            $author = Author::where('name', $bookData['author'])->first();
            if ($author) {
                $book->authors()->attach($author->id);
            }

            // Жанры
            $genres = Genre::whereIn('name', $bookData['genres'])->pluck('id');
            $book->genres()->attach($genres);
        }
    }
}



