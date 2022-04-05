<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParameterContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact__us', function (Blueprint $table) {
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('telegram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cotact__us', function (Blueprint $table) {
            //
        });
    }
}
