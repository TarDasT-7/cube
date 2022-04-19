<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineclasses', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->nullable()->default(0);
            $table->string('title', 250);
            $table->bigInteger('category');
            $table->bigInteger('sub_category');
            $table->string('link', 250);
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
        Schema::dropIfExists('onlineclasses');
    }
}
