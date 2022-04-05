<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('podcast_id')->unsigned();
            $table->string('Ip');
            $table->timestamps();
            $table->foreign('podcast_id')->references('id')->on('podcasts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podcast_views');
    }
}
