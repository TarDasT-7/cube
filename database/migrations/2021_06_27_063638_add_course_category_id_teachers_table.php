<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCourseCategoryIdTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->integer('course_category_id')->unsigned();
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
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
