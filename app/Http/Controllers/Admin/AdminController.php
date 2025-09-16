<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function books() {
        $allAuthors = Author::all(); // для select2
        $allGenres = Genre::all();
        $books = Book::with(['authors', 'genres'])->paginate(10); // 10 книг на страницу

        return view('admin.books', [
            'books' => $books,
            'allAuthors' => $allAuthors,
            'allGenres' => $allGenres
        ]);
    }


    public function authors(){
        $authors = Author::with(['books'])->paginate(10);
        return view('admin.authors', compact('authors'));
    }

}
