<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('questions', function (Blueprint $table) {
        $table->increments('id');
        $table->text('name');
        $table->text('email');
        $table->text('question');
        $table->longText('answer')->nullable();
        $table->integer('question_category_id')->nullable()->unsigned();
        $table->timestamps();
        $table->foreign('question_category_id')->references('id')->on('question_categories')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
