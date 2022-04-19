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
            $table->string('demo');
            $table->text('desc' , 1000);
            $table->text('long_desc' , 10000);
            $table->integer('price');
            $table->integer('off');
            $table->integer('video_num');
            $table->string('course_time');
            $table->string('level');
            $table->bigInteger('producer_id');
            $table->bigInteger('category_id');
            $table->bigInteger('sub_category');
            $table->string('type');
            $table->text('link' , 2500)->nullable();
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
        Schema::dropIfExists('courses');
    }
}
