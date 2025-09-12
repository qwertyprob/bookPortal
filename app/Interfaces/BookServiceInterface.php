<?php

namespace App\Interfaces;

use App\DTO\BookData;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookServiceInterface
{
    public function getAllBooks() : array;
    public function getPaginatedBooks(int $pageCounter) : LengthAwarePaginator;
    public function getBookById(int $id) : BookData;
}
