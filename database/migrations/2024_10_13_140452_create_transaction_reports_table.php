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
    public function up() {
        Schema::create('transaction_reports', function (Blueprint $table) {
            $table->id('report_ID'); // PK
            $table->unsignedBigInteger('customer_ID'); // FK to Customers table
            $table->unsignedBigInteger('order_ID'); // FK to Shopping Orders table
            $table->unsignedBigInteger('product_ID'); // FK to Products table
            $table->unsignedBigInteger('payment_ID'); // FK to Payments table
            $table->timestamps();

            $table->foreign('customer_ID')->references('customer_ID')->on('customers')->onDelete('cascade');
            $table->foreign('order_ID')->references('order_ID')->on('shopping_orders')->onDelete('cascade');
            $table->foreign('product_ID')->references('product_ID')->on('products')->onDelete('cascade');
            $table->foreign('payment_ID')->references('payment_ID')->on('payments')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('transaction_reports');
    }
};
