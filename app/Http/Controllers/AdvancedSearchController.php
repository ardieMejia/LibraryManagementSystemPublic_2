<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class AdvancedSearchController extends Controller
{
    //
    public function index()
    {
        //
        $books=Book::with('author')->with('category')->get();
        return view('bookadvancedsearch', ['books'=>$books]);

    }

    public function showfilter(Request $request){


        // $books=DB::table('books')->join('authors','authors.id','=','books.authors_id')
        //       ->where('title','like','%'.$request->keywordsearch.'%')
        //       ->orWhere('details','like','%'.$request->keywordsearch.'%')
        //       ->get();

        // search is still within a single table, havent tried multiple tables

        $books=Book::with('author')->with('category')->where('title','like','%'.$request->keyword.'%')
              ->orWhere('details','like','%'.$request->keyword.'%')
              ->get();
        return view('bookadvancedsearch', ['books'=>$books]);

    }
}
