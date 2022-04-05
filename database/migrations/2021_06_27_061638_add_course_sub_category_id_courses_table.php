<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCourseSubCategoryIdCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('course_sub_category_id')->unsigned();
            $table->foreign('course_sub_category_id')->references('id')->on('course_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
