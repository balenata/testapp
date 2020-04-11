<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment_text',1000);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('movie_id');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_movies');
    }
}
