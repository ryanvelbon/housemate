<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This migration adds an `order` column to the `countries` table.
 * 
 * By adding this column, we can easily control which countries are featured
 * and their order of appearance, directly from the database, making the
 * management of featured countries flexible and efficient.
 */

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->unsignedTinyInteger('order')->nullable();
        });

        // Update the order for countries that should be featured
        $featCountries = [
            ['iso2' => 'ID', 'order' => 1], // Indonesia
            ['iso2' => 'JP', 'order' => 1], // Japan
            ['iso2' => 'MY', 'order' => 1], // Malaysia
            ['iso2' => 'PH', 'order' => 1], // Philippines
            ['iso2' => 'SG', 'order' => 1], // Singapore
            ['iso2' => 'KR', 'order' => 1], // South Korea
            ['iso2' => 'TH', 'order' => 1], // Thailand
            ['iso2' => 'VN', 'order' => 1], // Vietnam
        ];

        foreach ($featCountries as $country) {
            DB::table('countries')
                ->where('iso2', $country['iso2'])
                ->update(['order' => $country['order']]);
        }
    }

    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
