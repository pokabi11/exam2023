<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(Request $request){
        $book=Book::with("Author")->paginate(20);
        return view("home",compact('book'));
    }
    public function searchBook(Request $request){
        $search=$request->get("search");
        $book=Book::with('Author')->Search($search)->paginate();
        if($book->count()>0){
            return view('home',compact('book'));
        }
        return redirect()->route("book")->with("err_search","Book not found");
    }

}
