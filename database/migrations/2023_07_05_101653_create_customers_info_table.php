<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers_info', function (Blueprint $table) {
            $table->id('customers_id');
            $table->string('customers_fname',100);
            $table->string('customers_lname',100);
            $table->string('customers_email')->unique();
            $table->bigInteger('customers_phone');
            $table->string('customers_address',200);
            $table->string('customers_city',100);
            $table->string('customers_state',100);
            $table->bigInteger('customers_pincode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_info');
    }
};
