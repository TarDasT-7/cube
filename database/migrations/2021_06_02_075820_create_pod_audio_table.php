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
            $table->tinyInteger('number');
            $table->string('title');
            $table->string('name');
            $table->string('image');
            $table->string('sound');
            $table->bigInteger('podcast_id');
            $table->bigInteger('producer_id');
            $table->text('description');
            $table->mediumText('tags')->nullable();
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
        Schema::dropIfExists('pod_adious');
    }
}
