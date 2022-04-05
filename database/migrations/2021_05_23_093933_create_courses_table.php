<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->longText('desc');
            $table->integer('price');
            $table->integer('off_price');
            $table->integer('off');
            $table->integer('video_num');
            $table->string('course_time');
            $table->string('level');
            $table->integer('teacher_id')->unsigned();
            $table->string('condition');
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
