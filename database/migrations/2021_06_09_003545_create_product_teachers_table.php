<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_teachers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('product_category_id')->unsigned();
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_teachers');
    }
}
