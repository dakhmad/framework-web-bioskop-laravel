<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('cast_movies', function (Blueprint $table) {
            $table->id();
            $table->uuid('cast_id');
            $table->foreign('cast_id')->references('id')->on('casts')->onDelete('cascade');
            $table->foreignId('movie_id')->constrained('movies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cast_movies');
    }
}
