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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_ID'); // PK
            $table->string('name');
            $table->string('contact_add');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('customers');
    }
};
