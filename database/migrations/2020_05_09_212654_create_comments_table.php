<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->string('comment_name');
            $table->string('comment_email');
            $table->text('comment_details');
            $table->timestamps();
            // $table->foreign('comment_id')->references('anime_id')->on('anime')->onDelete('cascade');
            $table->unsignedBigInteger('id_anime');

            $table->foreign('id_anime')->references('anime_id')->on('animes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
