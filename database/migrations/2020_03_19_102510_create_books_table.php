<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('book_ISBN');
            $table->string('book_title');
            $table->string('book_author');
            $table->string('book_publisher');
            $table->string('book_category');
            $table->string('book_year');
            $table->string('book_picture');
            $table->string('book_description');
            $table->float('book_price');
            $table->int('book_quantity');
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
        Schema::dropIfExists('books');
    }
}
