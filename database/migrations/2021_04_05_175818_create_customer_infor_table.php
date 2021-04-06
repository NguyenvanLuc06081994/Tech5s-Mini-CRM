<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_infor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('national')->nullable();
            $table->string('city')->nullable();
            $table->string('company');
            $table->string('full_name');
            $table->string('gender');
            $table->string('position');
            $table->string('address');
            $table->string('phone_number');
            $table->string('tax_code');
            $table->smallInteger('act')->default(1);
            $table->smallInteger('status')->default(1);
            $table->text('description');
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::dropIfExists('customer_infor');
    }
}
