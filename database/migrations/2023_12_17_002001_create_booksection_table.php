<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booksection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('isbn')->nullable();
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->date('publication_date')->nullable();
            $table->integer('pages')->nullable();
            $table->string('price')->nullable();
            $table->string('book_file')->nullable();
            $table->longText('synopsis')->nullable();
            $table->string('genre')->nullable();
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
        Schema::dropIfExists('booksection');
    }
}
