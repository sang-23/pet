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
        Schema::create('breeds_info', function (Blueprint $table) {
            $table->id('breed_id');
            $table->unsignedBigInteger('pet_typesid')->nullable();
            $table->foreign('pet_typesid')->references('pet_typeid')->on('pets_category');
            $table->string('breed_name',100);

         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds_info');
    }
};
