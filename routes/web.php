<?php

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/books', function () {
    $books = Book::all();


    return view('books', ['books' => $books]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/authors', function () {
    $authors = Author::all();
    $books = Book::all();


    return view('authors', ['authors' => $authors]);
});


