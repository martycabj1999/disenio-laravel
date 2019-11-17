<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('dni');
            $table->boolean('is_student')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->date('date_birth');
            $table->string('street');
            $table->integer('number');
            $table->string('dept')->nullable();
            $table->string('floor')->nullable();
            $table->bigInteger('cities_id')->nullable()->unsigned();
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
        Schema::dropIfExists('users');
    }
}
