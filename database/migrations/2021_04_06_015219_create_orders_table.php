<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_id');
            $table->string('service_name');
            $table->string('customer');
            $table->string('order_duration');
            $table->bigInteger('setup_fee');
            $table->bigInteger('maintain_fee');
            $table->smallInteger('vat');
            $table->smallInteger('vat_tax');
            $table->bigInteger('total_discount');
            $table->bigInteger('subtotal');
            $table->string('payment');
            $table->string('payment_type');
            $table->dateTime('time');
            $table->smallInteger('act')->default(1);
            $table->smallInteger('status')->default(1);
            $table->foreign('contract_id')->references('id')->on('contracts');
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
        Schema::dropIfExists('orders');
    }
}
