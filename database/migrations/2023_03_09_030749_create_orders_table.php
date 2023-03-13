<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('address_id');
            $table->string('order_number', 20)->unique();
            $table->double('discount')->default('0');
            $table->double('subtotal')->default('0');
            $table->double('grand_total')->default('0');
            $table->string('order_status', 10)->default('pending');

            $table->foreign('customer_id')->on('customers')->references('id');
            $table->foreign('address_id')->on('addresses')->references('id');
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
};
