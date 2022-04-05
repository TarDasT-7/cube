<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_sub_category_id')->unsigned();
            $table->string('name');
            $table->integer('good_id');
            $table->integer('price');
            $table->integer('off_price');
            $table->integer('off');
            $table->integer('video_num');
            $table->string('language');
            $table->integer('product_teacher_id')->unsigned();
            $table->longText('review');
            $table->longText('content');
            $table->string('properties');
            $table->timestamps();
            $table->foreign('product_teacher_id')->references('id')->on('product_teachers');
            $table->foreign('product_sub_category_id')->references('id')->on('product_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
