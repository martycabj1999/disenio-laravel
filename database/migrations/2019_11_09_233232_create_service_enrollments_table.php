<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_up');
            $table->date('date_down')->nullable();
            $table->float('amount');
            $table->float('amount_paid')->nullable();
            $table->float('discount')->nullable();
            $table->bigInteger('enrollments_id')->nullable()->unsigned();
            $table->bigInteger('complementary_services_id')->nullable()->unsigned();
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
        Schema::dropIfExists('service_enrollments');
    }
}
