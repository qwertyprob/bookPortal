<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);


Route::get('/books', [BookController::class, 'getAllBooks']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/authors', [AuthorController::class, 'getAllAuthors']);

//auth

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});


