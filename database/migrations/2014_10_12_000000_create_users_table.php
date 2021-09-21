<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password', 60)->nullable();
            $table->char('gender')->nullable();
            $table->string('contactnum')->nullable();
            $table->string('dept')->nullable();
            $table->string('jobtitle')->nullable();
            $table->string('oauth_token')->nullable();
            $table->string('oauth_token_secret')->nullable();
            
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
