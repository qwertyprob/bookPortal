<?php

namespace App\DTO;

use App\Models\Book;
class BookData
{
    private $id;
    public string $title;
    public string $description;
    public ?int $published_year;
    public ?int $pages;
    public string $cover_image;
    public array $authors;

    public function __construct(Book $book) {
        $this->id = $book->id;
        $this->title = $book->title;
        $this->description = $book->description;
        $this->published_year = $book->published_year;
        $this->pages = $book->pages;
        $this->cover_image = $book->cover_image;
        $this->authors = $book->authors->pluck('id')->toArray();
    }

    public function getId(): int
    {
        return $this->id;
    }
}
