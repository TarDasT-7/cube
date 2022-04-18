<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_videos', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('cover');
            $table->bigInteger('producer_id');
            $table->string('time');
            $table->string('demo');
            $table->bigInteger('category_id');
            $table->text('small_description');
            $table->text('long_description');

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
        Schema::dropIfExists('free_videos');
    }
}
