<?php

namespace App\Interfaces;

interface BookRepositoryInterface
{
    public function getAllBooks();
    public function getPaginatedBooks($pageCounter);
    public function getBookById($id);
}
