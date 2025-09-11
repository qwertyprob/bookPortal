<?php

namespace App\Http\Controllers;

use App\Interfaces\BookRepositoryInterface;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Routing\Controller;
use Exception;
use Illuminate\Support\Collection;

class BookController extends Controller
{
    private readonly BookRepositoryInterface $bookRepository;
    public function __construct(BookRepositoryInterface $bookRepository){
        $this->bookRepository = $bookRepository;
    }


    public function index()
    {
        try {
            $books = $this->getSixBooks();

            $authors = Author::with('books')->get()
                ->sortByDesc(fn($author) => $author->books->count())
                ->take(6);

        } catch (\Exception $e) {
            $books = collect();
            $authors = collect();

            return view('index', [
                'books' => $books,
                'authors' => $authors,
                'error' => $e->getMessage()
            ]);
        }

        return view('index', [
            'books' => $books,
            'authors' => $authors
        ]);
    }

    function getAllBooks()
    {
        $books = $this->bookRepository->getPaginatedBooks(12);


        return view('books', ['books' => $books]);
    }

    function  getSixBooks()
    {
        $books = Book::query()->limit(6)->get();

        if($books->isEmpty())
            throw new Exception("No books found");

        return $books;
    }

    function getBook($id)
    {
        $book = Book::all()->where('id', $id)->first();

        return view('singleViews.book', ['book' => $book]);

    }

}
