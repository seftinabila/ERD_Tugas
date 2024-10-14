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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_ID'); // PK
            $table->unsignedBigInteger('category_ID'); // FK to Categories table
            $table->string('product_name');
            $table->timestamps();

            $table->foreign('category_ID')->references('category_ID')->on('categories')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
};
