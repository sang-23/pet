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
        Schema::create('pet_info', function (Blueprint $table) {
            $table->id('pet_id');
            $table->string('pet_name',100);
            $table->unsignedBigInteger('pet_type_id')->nullable();
            $table->foreign('pet_type_id')->references('pet_typeid')->on('pets_category');
            $table->unsignedBigInteger('pet_parentid')->nullable();
            $table->foreign('pet_parentid')->references('customers_id')->on('customers_info');
            $table->date('pet_bday');
            $table->enum('pet_gender', ['male', 'female','others']);
            $table->unsignedBigInteger('pet_breedid')->nullable();
            $table->foreign('pet_breedid')->references('breed_id')->on('breeds_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_info');
    }
};

