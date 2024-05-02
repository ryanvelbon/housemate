<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This migration adds an `sort` column to the `countries` table.
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
            $table->unsignedTinyInteger('sort')->nullable();
        });

        // Update the order for countries that should be featured
        $featCountries = [
            ['iso2' => 'ID', 'sort' => 1], // Indonesia
            ['iso2' => 'JP', 'sort' => 1], // Japan
            ['iso2' => 'MY', 'sort' => 1], // Malaysia
            ['iso2' => 'PH', 'sort' => 1], // Philippines
            ['iso2' => 'SG', 'sort' => 1], // Singapore
            ['iso2' => 'KR', 'sort' => 1], // South Korea
            ['iso2' => 'TH', 'sort' => 1], // Thailand
            ['iso2' => 'VN', 'sort' => 1], // Vietnam
        ];

        foreach ($featCountries as $country) {
            DB::table('countries')
                ->where('iso2', $country['iso2'])
                ->update(['sort' => $country['sort']]);
        }
    }

    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('sort');
        });
    }
};
