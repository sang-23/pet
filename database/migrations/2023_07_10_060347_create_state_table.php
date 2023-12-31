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
        Schema::create('state', function (Blueprint $table) {
            $table->id('state_id');
            $table->string('state',100);
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('countrys_id')->on('country');

            $table->timestamps();
        });

        // Add the remaining states
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('state');
    }
};
