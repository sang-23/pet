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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id('vendors_id');
            $table->unsignedBigInteger('userven_id')->unique();
            $table->foreign('userven_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('vendors_fname',100);
            $table->string('vendors_lname',100);
            $table->string('vendors_uname',100);
            $table->string('vendors_email')->unique();
            
            $table->string('vendors_password');

            $table->string('vendors_address',200);
            $table->string('vendors_city',100);
            $table->string('vendors_state',100);
            $table->bigInteger('vendors_phone');
            $table->binary('vendors_avatar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
