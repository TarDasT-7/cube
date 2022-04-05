<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pod_audio', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('file');
            $table->integer('podcast_id')->unsigned();
            $table->string('podcast_time');
            $table->integer('show_id');
            $table->timestamps();
            $table->foreign('podcast_id')->references('id')->on('podcasts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pod_adious');
    }
}
