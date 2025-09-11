<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Repositories\BookRepository;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookRepositoryTest extends TestCase
{
    protected function set_up(){
        parent::setUp();

        Book::factory()->create();


    }

    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {

        $this->assertTrue(true);
    }


}
