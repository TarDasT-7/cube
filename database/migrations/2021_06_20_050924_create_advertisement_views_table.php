<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advertisement_id')->unsigned();
            $table->string('Ip');
            $table->timestamps();
            $table->foreign('advertisement_id')->references('id')->on('advertisements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement_views');
    }
}
