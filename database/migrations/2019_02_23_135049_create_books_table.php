<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ISBN')->nullable();
            $table->string('title');
            $table->string('details',1200)->nullable();
            $table->string('authors_id');
            $table->integer('categories_id')->unsigned();
            $table->integer('subcategories_id')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
