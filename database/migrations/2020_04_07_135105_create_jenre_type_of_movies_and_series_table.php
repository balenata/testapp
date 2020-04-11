<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenreTypeOfMoviesAndSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenre_type_of_movies_and_series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('series_id');
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('jenretype_id');
            $table->timestamps();

            $table->foreign('series_id')->references('id')->on('series');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('jenretype_id')->references('id')->on('jenre_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenre_type_of_movies_and_series');
    }
}
