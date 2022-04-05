<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_num')->nullable();
            $table->string('password');
            $table->integer('role')->unsigned()->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
