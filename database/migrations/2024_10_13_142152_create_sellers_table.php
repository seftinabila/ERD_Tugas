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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('seller_ID'); // PK
            $table->unsignedBigInteger('product_ID'); // FK to Products table
            $table->string('name');
            $table->timestamps();

            $table->foreign('product_ID')->references('product_ID')->on('products')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('sellers');
    }
};
