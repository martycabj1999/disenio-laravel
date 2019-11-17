<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->bigInteger('states_id')->nullable()->unsigned();
            $table->bigInteger('users_id')->nullable()->unsigned();
            $table->bigInteger('scholarships_id')->nullable()->unsigned();
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
        Schema::dropIfExists('scholarship_people');
    }
}
