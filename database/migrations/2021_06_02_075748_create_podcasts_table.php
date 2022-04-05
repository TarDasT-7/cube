<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->longText('desc');
            $table->integer('speaker_id')->unsigned();
            $table->timestamps();
            $table->foreign('speaker_id')->references('id')->on('speakers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
}
