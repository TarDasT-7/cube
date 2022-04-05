<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_blog_category', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned();
            $table->integer('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
            $table->foreign('blog_id')->references('id')->on('blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_blog_category');
    }
}
