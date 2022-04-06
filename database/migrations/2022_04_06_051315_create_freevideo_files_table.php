<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreevideoFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freevideo_files', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->string('size');
            $table->bigInteger('freevideo_id');
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
        Schema::dropIfExists('freevideo_files');
    }
}
