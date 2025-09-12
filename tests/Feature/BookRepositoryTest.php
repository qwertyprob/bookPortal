<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertEquals;

class BookRepositoryTest extends TestCase
{
    use RefreshDatabase;

    protected BookRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new BookRepository();
    }

    public function testCreateBooks()
    {
        Book::factory()->count(12)->create();

        $books = $this->repository->getAllBooks();

        self::assertEquals(12, $books->count());
    }

    public function testGetBookById()
    {
        Book::factory()->count(2)->create();
        $bookNeeded = $this->repository->getBookById(1);

        assertEquals($bookNeeded, Book::where("id", 1)->first());
    }

}
