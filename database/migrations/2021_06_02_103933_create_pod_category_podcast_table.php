<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodCategoryPodcastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pod_category_podcast', function (Blueprint $table) {
            $table->integer('podcast_id')->unsigned();
            $table->integer('pod_category_id')->unsigned();
            $table->foreign('pod_category_id')->references('id')->on('pod_categories');
            $table->foreign('podcast_id')->references('id')->on('podcasts');
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
        Schema::dropIfExists('pod_category_podcast');
    }
}
