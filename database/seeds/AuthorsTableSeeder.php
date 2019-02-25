<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert(['firstname'=>'Peter','lastname'=>'Hamilton']);
        DB::table('authors')->insert(['firstname'=>'Greg','lastname'=>'Bear']);
        DB::table('authors')->insert(['firstname'=>'Philip','lastname'=>'Roth']);
        DB::table('authors')->insert(['firstname'=>'Stephen','lastname'=>'King']);
        DB::table('authors')->insert(['firstname'=>'Paul','lastname'=>'Deitel']);
    }
}
