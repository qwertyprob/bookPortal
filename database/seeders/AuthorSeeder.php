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
            [
                'name' => 'Лев Толстой',
                'bio' => 'Русский писатель, автор "Войны и мир", "Анна Каренина".',
                'portrait' => 'https://www.culture.ru/_next/image?url=https%3A%2F%2Fcdn.culture.ru%2Fimages%2F76f6eaaa-97b1-5cc9-8955-b9099dc5bbb2%2Fc_fill%2Cg_center%2Fava-jpg.webp&w=2048&q=75'
            ],
            [
                'name' => 'Фёдор Достоевский',
                'bio' => 'Русский писатель, автор "Преступление и наказание", "Братья Карамазовы".',
                'portrait' => 'https://api.azbooka.ru/upload/iblock/1de/f7236a03582vz8yal0tf56kb1bwyovq7.jpg'
            ],
            [
                'name' => 'Александр Пушкин',
                'bio' => 'Русский поэт и писатель, автор "Евгения Онегина", "Капитанской дочки".',
                'portrait' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfKQTHxmUGSwYRa4h6PTSADYkuDd8uNOyOsA&s'
            ],
            [
                'name' => 'Антон Чехов',
                'bio' => 'Русский писатель и драматург, автор "Вишнёвого сада", "Человека в футляре".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/b/bc/%D0%90._%D0%9F._%D0%A7%D0%B5%D1%85%D0%BE%D0%B2%2C_%D0%AF%D0%BB%D1%82%D0%B0.jpg'
            ],
            [
                'name' => 'Михаил Булгаков',
                'bio' => 'Русский писатель, автор "Мастер и Маргарита", "Белая гвардия".',
                'portrait' => 'https://www.culture.ru/_next/image?url=https%3A%2F%2Fcdn.culture.ru%2Fimages%2F964a33d2-120b-5946-a0a2-0d0c9278f00d%2Fw_1020%2Cc_fill%2Cg_center%2F1-jpg&w=2048&q=75'
            ],
            [
                'name' => 'Иван Тургенев',
                'bio' => 'Русский писатель, автор "Отцы и дети".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/7/72/Turgenev_by_Repin.jpg'
            ],
            [
                'name' => 'Михаил Лермонтов',
                'bio' => 'Русский поэт и писатель, автор "Герой нашего времени".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Mikhail_lermontov.jpg/330px-Mikhail_lermontov.jpg'
            ],
            [
                'name' => 'Николай Гоголь',
                'bio' => 'Русский писатель, автор "Мёртвые души", "Шинель".',
                'portrait' => 'https://www.culture.ru/_next/image?url=https%3A%2F%2Fcdn.culture.ru%2Fimages%2Fd986685a-99c4-5fe3-a2bc-1053a038f350%2Fc_fill%2Cg_center%2Fgogol-jpg&w=2048&q=75'
            ],
            [
                'name' => 'Борис Пастернак',
                'bio' => 'Русский писатель и поэт, автор "Доктор Живаго".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Boris_Pasternak_1959_photo.jpg'
            ],
            [
                'name' => 'Михаил Шолохов',
                'bio' => 'Русский писатель, автор "Тихий Дон".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/%D0%9C%D0%B8%D1%85%D0%B0%D0%B8%D0%BB_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87_%D0%A8%D0%BE%D0%BB%D0%BE%D1%85%D0%BE%D0%B2.jpg'
            ],
            [
                'name' => 'Анатолий Рыбаков',
                'bio' => 'Русский писатель, автор "Дети Арбата".',
                'portrait' => 'https://belgdb.ru/upload/almanakh/img/Rybakov/%D0%9C%D0%B0%D0%B9%D0%BE%D1%80%20%D0%90.%20%D0%A0%D1%8B%D0%B1%D0%B0%D0%BA%D0%BE%D0%B2.jpg'
            ],
            [
                'name' => 'Иван Гончаров',
                'bio' => 'Русский писатель, автор "Обломов".',
                'portrait' => 'https://www.culture.ru/_next/image?url=https%3A%2F%2Fcdn.culture.ru%2Fimages%2F99cde324-586f-5b53-9117-4481d72a6834%2Fc_fill%2Cg_center%2F0-jpg&w=2048&q=75'
            ],
            [
                'name' => 'Андрей Платонов',
                'bio' => 'Русский писатель, автор "Чевенгур".',
                'portrait' => 'https://upload.wikimedia.org/wikipedia/commons/2/26/Platonov_1940_1970.jpg'
            ],
            [
                'name'=>'Иван Бунин',
                'bio'=> 'Автор нашумевшего романа про простутицию в СССР - "Яма"',
                'portrait'=>'https://odessa-memory.info/ru/images/B/Bunin/Bunin1.jpg'
            ]
        ];



        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
