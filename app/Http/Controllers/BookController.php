<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    function index()
    {
        $books = Book::all();

        return view('index', ['books' => $books]);
    }
    function getAllBooks()
    {
        $books = Book::all();

        return view('books', ['books' => $books]);
    }
}
