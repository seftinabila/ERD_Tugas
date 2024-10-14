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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('delivery_ID'); // PK
            $table->unsignedBigInteger('customer_ID'); // FK to Customers table
            $table->date('date');
            $table->timestamps();

            $table->foreign('customer_ID')->references('customer_ID')->on('customers')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('deliveries');
    }
};
