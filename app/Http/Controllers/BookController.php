<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(){
        $book=Book::all();
        return view("list",compact('book'));
    }
    public function searchBook(Request $request){
        $book=Book::where("name",$request->get("search"))->first();
        if($book && is_array($book)){
            return redirect()->route("list",compact("book"));
        }
        return redirect()->route("list")->with("err_search","Book not found");
    }

}
