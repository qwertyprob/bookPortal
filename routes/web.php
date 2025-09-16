<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/profile', function () {
    return view('auth.profile');
});



//book
Route::controller(BookController::class)->prefix('book')->group(function () {

    Route::get('{id}', 'getBook');

});

//author
Route::controller(AuthorController::class)->prefix('author')->group(function () {
   Route::get('{id}', 'getAuthor');
});


//admin

//Route::get('/admin', function () {
//    return view('admin.dashboard');
//});

Route::controller(AdminController::class)
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/books', 'books')->name('books');
        Route::get('/authors', 'authors')->name('authors');

    });



