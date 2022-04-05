<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_sub_categories', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('course_category_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('course_category_id')->references('id')->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_sub_categories');
    }
}
