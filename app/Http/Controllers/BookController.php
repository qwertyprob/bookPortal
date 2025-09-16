<?php

namespace App\Http\Controllers;

use App\Interfaces\BookServiceInterface;
use App\Models\Author;

use App\Models\Book;
use Illuminate\Routing\Controller;
use Exception;
use Illuminate\Support\Collection;

class BookController extends Controller
{
    private readonly BookServiceInterface $bookService;
    public function __construct(BookServiceInterface $bookService){
        $this->bookService = $bookService;
    }


    public function index()
    {
        $books = $this->getAllBooks();

        return view('index', ['books'=>compact('books') , 'authors' => Author::all(),'error'=>'Нет книг!']);
    }

    function getAllBooks()
    {
        $books = $this->bookService->getPaginatedBooks(12);


        return view('books', ['books' => $books]);
    }

    public function getBook($id)
    {
        $book = Book::find($id);

        return view('singleViews.book', ['book' => $book]);
    }



}
