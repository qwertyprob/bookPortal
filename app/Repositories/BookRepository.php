<?php

namespace App\Repositories;

use App\Interfaces\BookRepositoryInterface;
use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{

    public function getAllBooks()
    {
        return Book::all();
    }

    public function getPaginatedBooks($pageCounter)
    {
        return Book::orderBy('title')->paginate($pageCounter);
    }

    public function getBookById($id)
    {
        return Book::all()->where('id', $id)->first();
    }
}
