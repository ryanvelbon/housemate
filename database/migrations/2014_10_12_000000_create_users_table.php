<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // Profile columns
            $table->text('avatar')->nullable();
            $table->date('dob')->nullable();
            $table->char('sex', 1)->nullable();
            $table->unsignedMediumInteger('nationality_id')->nullable();
            $table->unsignedMediumInteger('city_id')->nullable();
            $table->text('bio')->nullable();

            // foreign key constraints
            $table->foreign('nationality_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
