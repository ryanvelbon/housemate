<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedMediumInteger('city_id');
            $table->string('address')->nullable();
            $table->string('type')->nullable();
            $table->integer('size')->nullable();
            $table->integer('n_bedrooms')->nullable();
            $table->float('n_bathrooms', 2, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            // foreign key constraints
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
