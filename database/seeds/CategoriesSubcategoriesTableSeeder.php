<?php

use Illuminate\Database\Seeder;

class CategoriesSubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $category_id=DB::table('categories')->skip(0)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(0)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(0)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(1)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(1)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(0)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(1)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(1)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(2)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(0)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(2)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(1)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(3)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(0)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(3)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(1)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(3)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(4)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(5)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(2)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(5)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(3)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);

        $category_id=DB::table('categories')->skip(5)->first()->id;
        $subcategory_id=DB::table('subcategories')->skip(4)->first()->id;
        DB::table('categories_subcategories')->insert([
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id
        ]);
    }
}
