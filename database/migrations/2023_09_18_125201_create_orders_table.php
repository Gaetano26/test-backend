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
            $table->unsignedBigInteger('chart_id')->nullable();
            $table->unsignedBigInteger('payment_id');
            $table->timestamp('order_date')->default(now());
            $table->decimal('total_price', 10, 3);
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('chart_id')->references('id')->on('charts');
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
