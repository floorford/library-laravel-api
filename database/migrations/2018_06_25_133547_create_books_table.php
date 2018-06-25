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
      Schema::create('books', function (Blueprint $table) {
        $table->increments('id');
        $table->string("title", 100);
        $table->string("author", 100);
        $table->integer('pages');
        $table->date('published');
        $table->char('IBSN', 25);
        $table->tinyInteger('rating');
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