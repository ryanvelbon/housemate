<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained();
            $table->string('title');
            $table->string('description');
            $table->string('place_type');
            $table->string('bed_type');
            $table->decimal('price_per_night', 15, 2);
            $table->decimal('price_per_month', 15, 2);
            $table->integer('min_n_nights');
            $table->integer('max_n_nights');
            $table->boolean('instant_book')->default(0);
            $table->boolean('self_checkin')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
