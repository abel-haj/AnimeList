<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id('anime_id');
            $table->string('anime_name')->unique();
            $table->string('anime_image')->default('nocover.jpg');
            $table->string('anime_featured_image')->default('nofeatured.jpg');
            $table->date('anime_release_date');
            $table->text('anime_description');
            $table->integer('anime_rating');
            $table->integer('anime_votes')->default(0);
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
        Schema::dropIfExists('animes');
    }
}
