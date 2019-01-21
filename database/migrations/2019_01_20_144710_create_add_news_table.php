<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',200);
            $table->integer('category-id');
            $table->string('category');
            $table->string('short-details',500);
            $table->string('news-quotes',200);
            $table->string('news-details',1000);
            $table->string('image', 200)->nullable();
            $table->string('tag');
            $table->string('page-description',1000);
            $table->string('slug');
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
        Schema::dropIfExists('add_news');
    }
}
