<?php

namespace Tests\Feature;

use App\DTO\BookData;
use App\Services\BookService;
use Tests\TestCase;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertEquals;

class BookServiceTest extends TestCase
{

    protected BookService $service;
    protected BookRepository $repository;

    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->repository = new BookRepository();
        $this->service = new BookService($this->repository);
    }



    /**
     * A basic unit test example.
     */

    private function createFactory(int $count = 10)
    {
        Book::factory()->count($count)->create();
    }

    public function testDto()
    {
        $this->createFactory(12);

        $book = $this->repository->getBookById(12);
        // DTO на основе модели
        $bookData = new BookData($book);

        $this->assertEquals($book->title, $bookData->title);
        $this->assertEquals($book->description, $bookData->description);
        $this->assertEquals($book->cover_image, $bookData->cover_image);
    }

    public function testMapping()
    {
        $this->createFactory(2);

        $book = $this->repository->getBookById(2);

        $bookDto = new BookData($book);

        $bookMapped = $this->service->getBookById(2);

        assertEquals($bookMapped, $bookDto);


    }
}
