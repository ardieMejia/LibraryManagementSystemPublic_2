<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['categoryname'=>'Romance']);
        DB::table('categories')->insert(['categoryname'=>'Science Fiction']);
        DB::table('categories')->insert(['categoryname'=>'Horror']);
        DB::table('categories')->insert(['categoryname'=>'Biography History']);
        DB::table('categories')->insert(['categoryname'=>'Childrens']);
        DB::table('categories')->insert(['categoryname'=>'Mystery']);
        DB::table('categories')->insert(['categoryname'=>'Science and Technology']);
    }
}
