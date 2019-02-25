<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Subcategory;

class CategoriesController extends Controller
{
    //

    public function show()
    {
        //

        $page=0;
        $paginate=2;

        // original
        //$categories=DB::table('categories')->offset($page*$paginate)->take($paginate)->get();

        // again, with() is cleaner, abstracts away DB query, but cant make it work with orderBy/sortBy
        // of course we dont need to sort categories I guess
        $categories=Category::with('subcategories')
                   ->skip($page*$paginate)->take($paginate)
                   ->get();

        $firstOrLast="first";

        return view('admin/categories', ["categories"=>$categories,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate]);
    }

    public function showfilter(Request $request)
    {
        $page=$request->page;
        $paginate=$request->paginate;
        $page=$page+$request->direction;
        $count=Category::count();


        //        $categories=DB::table('categories')->offset($page*$paginate)->take($paginate)->get();

        $categories=Category::with('subcategories')
                   ->skip($page*$paginate)->take($paginate)
                   ->get();

        $rowsLeft=$count-($page)*$paginate;
        if ($page==0) {
            $firstOrLast="first";
        } elseif ($rowsLeft>$paginate) {
            $firstOrLast="middle";
        } else {
            $firstOrLast="last";
        }


        return view('admin/categories', ['categories'=>$categories,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate]);
    }


    public function create()
    {
        //
        $subcategories=Subcategory::all();
        $subcategories=$subcategories->sortBy('subcategoryname');

        return view('admin/categoryform',['subcategories'=>$subcategories]);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'categoryname'=>'required|unique:categories'
        ]);

        $category=new Category;
        $category->categoryname=$request->categoryname;
        $category->save();

        // ::insert can use array-of-arrays, didnt use here
        // now using DB::table inside foreach
        // probably an ugly way of doing this...

        foreach($request->subcategory_selected as $subcategory_id){
            DB::table('categories_subcategories')->insert([
                'category_id' => $category->id,
                'subcategory_id' => $subcategory_id
            ]);
        }

        $Details=$category;

        return view('misc/savenotify', ['performed'=>'saved','Details'=>$Details]);
    }


    public function edit($id)
    {
        //

        $category=Category::with('subcategories')->find($id);
        $subcategories=Subcategory::all();

        return view('/admin/categoryedit', ['category'=>$category,'subcategories'=>$subcategories]);
    }

    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'categoryname'=>'required'
        ]);

        $category=Category::find($id);
        $category->categoryname=$request->categoryname;
        $category->save();
        $Details=$category;


        // ugly solution: delete then insert again
        DB::table('categories_subcategories')->where('category_id','=',$category->id)->delete();
        foreach($request->subcategory_selected as $subcategory_id){
            DB::table('categories_subcategories')->insert([
                'category_id' => $category->id,
                'subcategory_id' => $subcategory_id
            ]);

        }

        return view('misc/savenotify', ['performed'=>'changed','Details'=>$Details]);
    }

    public function destroy($id)
    {
        $Details=Category::find($id);
        $childDetails=Category::find($id)->getBooks();

        $Details=Category::find($id);
        Category::find($id)->deleteAll();

        return view('misc/deletenotify', ['performed'=>'removed','Details'=>$Details,'childDetails'=>$childDetails]);
    }


}


