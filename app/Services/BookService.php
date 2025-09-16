<?php

namespace App\Services;

use App\DTO\BookData;
use App\Interfaces\BookRepositoryInterface;
use App\Interfaces\BookServiceInterface;
use App\Models\Book;
use function PHPSTORM_META\map;
use Illuminate\Pagination\LengthAwarePaginator;


class BookService implements BookServiceInterface
{
    private readonly BookRepositoryInterface $bookRepository;
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAllBooks(): array
    {
        $books = $this->bookRepository->getAllBooks()->map(
            fn($book) => new BookData($book)
        )->toArray();

        return $books;

    }


    public function getPaginatedBooks(int $pageCounter): LengthAwarePaginator
    {
        $paginator = $this->bookRepository->getPaginatedBooks($pageCounter);

        $booksDTO = $paginator->getCollection()->map(fn($book) => new BookData($book));

        $paginator->setCollection($booksDTO);


        return $paginator;
    }


    public function getBookById($id): BookData
    {
        $book = $this->bookRepository->getBookById($id);

        return new BookData($book);
    }
}
