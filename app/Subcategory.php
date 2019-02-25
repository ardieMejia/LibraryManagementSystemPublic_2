<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //

    public function categories(){
        return $this->belongsToMany('App\Category','categories_subcategories','subcategory_id','category_id');        
    }



}
