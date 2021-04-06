<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('contract_code')->unique();
            $table->string('creator');
            $table->string('duration_contract');
            $table->dateTime('time_start');
            $table->smallInteger('contract_status');
            $table->smallInteger('act');
            $table->smallInteger('status');
            $table->integer('total');
            $table->string('company');
            $table->string('user_registration');
            $table->string('register_phone');
            $table->string('register_address');
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('contracts');
    }
}
