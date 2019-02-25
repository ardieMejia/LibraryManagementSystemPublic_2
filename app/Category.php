<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function books()
    {
        return $this->hasMany('App\Book', 'categories_id', 'id');
    }

    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory','categories_subcategories','category_id','subcategory_id');
    }

    public function deleteAll()
    {
        $this->books()->delete();
        return parent::delete();
    }

    public function getBooks()
    {
        return $this->books()->where("categories_id", "=", $this->id)->get();
    }

    // ---------- fix this later ----------
    public function getSubcategories()
    {
        return $this->books()->where("categories_id", "=", $this->id)->get();
    }

}
