<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact__us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('phone');
            $table->text('address' , 1000);
            $table->string('email');
            $table->text('location' , 10000);
            $table->string('facebook')->nulable();
            $table->string('instagram')->nulable();
            $table->string('linkedin')->nulable();
            $table->string('telegram')->nulable();
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
        Schema::dropIfExists('contact__us');
    }
}
