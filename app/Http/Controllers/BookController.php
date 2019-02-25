<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;
use App\Category;
use App\Subcategory;
use App\Author;

class BookController extends Controller
{
    //
        public function show()
    {
        $page=1;
        $paginate=2;
        $order="asc";
        $column="title";

        // sometimes its a query builder, sometimes its an object
        // skip()->take() essentially produces mysql query: SELECT * from tblname LIMIT .. OFFSET .. both MUST be used together
        // while using with():
        // ---------- such as .. Book::with('category')->with('subcategory')
        // is cleaner & abstracts away db query details, I cant still figure how to do sorting without join(), very tricky

        $books=DB::table('books')->join('authors', 'books.authors_id', '=', 'authors.id')
              ->join('categories', 'books.categories_id', '=', 'categories.id')
              ->leftjoin('subcategories', 'books.subcategories_id', '=', 'subcategories.id')
              ->select('books.id', 'ISBN', 'title', 'firstname', 'lastname', 'categoryname','subcategoryname', 'books.created_at', 'books.updated_at');
        $books=$books->orderBy($column, $order)->offset(($page-1)*$paginate)->take($paginate)->get();




        $firstOrLast="first";

        return view('booksearch', ['books'=>$books,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate,'order'=>$order,'column'=>$column]);



    }
    public function showfilter(Request $request)
    {
        $order=$request->order;
        $page=$request->page;
        $page=$page+$request->direction;
        $paginate=$request->paginate;

        $column=$request->column;

        $count=Book::count();



        $books=DB::table('books')->join('authors', 'books.authors_id', '=', 'authors.id')
              ->join('categories', 'books.categories_id', '=', 'categories.id')
              // beautiful leftJoin, dont know what its for
              ->leftjoin('subcategories', 'books.subcategories_id', '=', 'subcategories.id')
              ->select('books.id', 'ISBN', 'title', 'firstname', 'lastname', 'categoryname','subcategoryname', 'books.created_at', 'books.updated_at');
        $books=$books->orderBy($column, $order)->offset(($page-1)*$paginate)->take($paginate)->get();

        // there is an error 1 page seemed to constantly miss..
        // later to maek it cleaner, separate this showfilter into its own controller (maybe single-action controller)

        $rowsLeft=$count-($page)*$paginate;
        if ($page==1) {
            $firstOrLast="first";
        } elseif ($rowsLeft>$paginate) {
            $firstOrLast="middle";
        } else {
            $firstOrLast="last";
        }

        return view('booksearch', ['books'=>$books,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate,'order'=>$order,'column'=>$column]);
    }

    public function create()
    {
        $categories=Category::all();
        $authors=Author::all();
        return view('book/bookform', ['categories'=>$categories,'authors'=>$authors]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|unique:books',
            'author_id'=>'required',
            'categorysubcategory'=>'required'
        ]);

        $catsubcat_id=explode('_',$request->categorysubcategory);

        $book=new Book;
        $book->ISBN=null;
        $book->title=$request->title;
        $book->details=$request->details;
        $book->authors_id=$request->author_id;
        $book->categories_id=$catsubcat_id[0];
        $book->subcategories_id=$catsubcat_id[1];
        $book->save();
        $Details=$book;

        return view('misc/savenotify', ['performed'=>'saved','Details'=>$Details]);
    }

    public function edit($id)
    {
        //
        $book=Book::find($id);
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $authors=Author::all();
        return view('/book/bookedit', ['book'=>$book,'categories'=>$categories,'subcategories'=>$subcategories,'authors'=>$authors]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'author_id'=>'required',
            'categorysubcategory'=>'required'
        ]);

        $catsubcat_id=explode('_',$request->categorysubcategory);

        $book=Book::find($id);
        $book->title=$request->title;
        $book->details=$request->details;
        $book->authors_id=$request->author_id;
        $book->categories_id=$catsubcat_id[0];
        $book->subcategories_id=$catsubcat_id[1];
        $book->save();
        $Details=$book;

        return view('/misc/savenotify', ['performed'=>'changed','Details'=>$Details]);

    }


    public function destroy($id)
    {
        $book=Book::find($id);
        $Details=$book;
        $book->delete();

        return view('misc/deletenotify', ['performed'=>'removed','Details'=>$Details]);
    }
}
