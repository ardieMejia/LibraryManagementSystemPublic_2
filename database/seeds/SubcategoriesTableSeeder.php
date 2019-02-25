<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subcategories')->insert([
            'subcategoryname' => 'anthologies'
        ]);
        DB::table('subcategories')->insert([
            'subcategoryname' => 'cover art collection'
        ]);
        DB::table('subcategories')->insert([
            'subcategoryname' => 'bibliography'
        ]);
        DB::table('subcategories')->insert([
            'subcategoryname' => 'criticism and review'
        ]);
        DB::table('subcategories')->insert([
            'subcategoryname' => 'history'
        ]);
    }
}
