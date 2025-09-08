<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

//Navigation bar views
Route::get('/', [BookController::class, 'index'])->name('index');

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



//book
Route::controller(BookController::class)->prefix('book')->group(function () {

    Route::get('{id}', [BookController::class, 'getBook']);
});

//author
Route::controller(AuthorController::class)->prefix('author')->prefix('author')->group(function () {
   Route::get('{id}', [AuthorController::class, 'getAuthor']);
});

