<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('image');
            $table->string('title');
            $table->string('category');
            $table->integer('good_id');
            $table->integer('user_id')->unsigned();;
            $table->integer('price');
            $table->integer('off_price');
            $table->integer('off');
            $table->integer('condition');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountings');
    }
}
