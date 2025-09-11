<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Routing\Controller;
use Exception;
class AuthorController extends Controller
{

    public function getAllAuthors(){
        $authors = Author::paginate(2);
        if($authors->isEmpty()|| $authors == null){
            $authors = collect();
        }
        return view('authors',['authors'=>$authors ,'status'=>'success']);
    }

    public function getAuthor($id){
        $author = Author::with('books')->where('id',$id)->first();

        return view('singleViews.author',['author'=>$author,'status'=>'success']);
    }

}
