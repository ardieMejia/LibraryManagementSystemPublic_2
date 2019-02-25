<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;

class SubcategoriesController extends Controller
{
    //
        public function show()
    {

        $page=0;
        $paginate=2;
        $firstOrLast="first";

        // we also dont need to sort subcategories, so with() is ok for now
        $subcategories=Subcategory::skip($page*$paginate)->take($paginate)
                   ->get();

        return view('admin/subcategories', ["subcategories"=>$subcategories,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate]);

    }

    public function showfilter(Request $request)
    {


        $page=$request->page;
        $paginate=$request->paginate;
        $page=$page+$request->direction;
        $count=Subcategory::count();

        // we also dont need to sort subcategories, so with() is ok for now
        $subcategories=Subcategory::skip($page*$paginate)->take($paginate)
                      ->get();

        $rowsLeft=$count-($page)*$paginate;
        if ($page==0) {
            $firstOrLast="first";
        } elseif ($rowsLeft>$paginate) {
            $firstOrLast="middle";
        } else {
            $firstOrLast="last";
        }

        return view('admin/subcategories', ["subcategories"=>$subcategories,'page'=>$page,'firstOrLast'=>$firstOrLast,'paginate'=>$paginate]);

    }


    public function create()
    {
        //
        return view('admin/subcategoryform');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'subcategoryname'=>'required|unique:subcategories'
        ]);

        $subcategory=new Subcategory;
        $subcategory->subcategoryname=$request->subcategoryname;
        $subcategory->save();


        $Details=$subcategory;

        return view('misc/savenotify', ['performed'=>'saved','Details'=>$Details]);

    }

    public function edit($id)
    {

        $subcategory=Subcategory::find($id);

        return view('/admin/subcategoryedit', ['subcategory'=>$subcategory]);

    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'subcategoryname'=>'required|unique:subcategories'
        ]);

        $subcategory=Subcategory::find($id);
        $subcategory->subcategoryname=$request->subcategoryname;
        $subcategory->save();
        $Details=$subcategory;

        return view('misc/savenotify', ['performed'=>'changed','Details'=>$Details]);

    }

    public function destroy($id)
    {

        $Details=Subcategory::find($id);
        Subcategory::find($id)->delete();

        return view('misc/deletenotify', ['performed'=>'removed','Details'=>$Details,'childDetails'=>null]);

    }


}
