<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Routing\Controller;
use mysql_xdevapi\Exception;

class BookController extends Controller
{
    function index()
    {
        $books = null;
        $authors = null;
       try
       {
           $books = $this->getSixBooks();
           $authors = Author::with('books')->get()
               ->sortByDesc(fn($author) => $author->books->count())->take(6);

       }
       catch (Exception $e)
       {
           return view('index', ['books' => $books, 'error' => $e->getMessage()]);
       }
        return view('index', ['books' => $books,'authors' => $authors]);
    }
    function getAllBooks()
    {
        $books = Book::all();

        return view('books', ['books' => $books]);
    }

    function  getSixBooks()
    {
        $books = Book::all()->take(6);

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
