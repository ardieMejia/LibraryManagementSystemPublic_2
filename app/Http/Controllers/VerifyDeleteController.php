<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyDeleteController extends Controller
{
    //

    public function verifydelete(Request $request, $id)
    {
        return view('/misc/verifydelete', ['id'=>$id,'propertyname'=>$request->propertyname]);
    }

}


