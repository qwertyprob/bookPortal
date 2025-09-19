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
        $booksCount = Book::count();
        $authorsCount = Author::count();
        $genresCount = Genre::count();

        return view('admin.dashboard', compact('booksCount', 'authorsCount', 'genresCount'));
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
        $authors = Author::paginate(12);
        $books = Book::all();
        if($authors->isEmpty()|| $authors == null){
            $authors = collect();
        }
        return view('admin.authors',['authors'=>$authors ,'status'=>'success','books'=>$books]);
    }

}
