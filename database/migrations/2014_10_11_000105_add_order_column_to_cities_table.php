<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This migration adds an `order` column to the `cities` table.
 * 
 * By adding this column, we can easily control which cities are featured
 * and their order of appearance, directly from the database, making the
 * management of featured cities flexible and efficient.
 */

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->unsignedTinyInteger('order')->nullable();
        });

        // Update the order for cities that should be featured
        $featCities = [

            /*
            |--------------------------------------------
            |    Indonesia
            |--------------------------------------------
            */
            ['id' => 56226, 'order' => 2], // Bogor
            ['id' => 56263, 'order' => 3], // Denpasar
            ['id' => 56827, 'order' => 3], // Kuta
            ['id' => 57011, 'order' => 1], // Surabaya
            ['id' => 57061, 'order' => 1], // Yogyakarta

            /*
            |--------------------------------------------
            |    Malaysia
            |--------------------------------------------
            */
            ['id' => 76411, 'order' => 3], // Ampang
            // ['id' => , 'order' => 3], // Bandar Sunway
            // ['id' => , 'order' => 3], // Bandar Utama
            // ['id' => , 'order' => 3], // Bangsar
            // ['id' => , 'order' => 3], // Cheras
            // ['id' => , 'order' => 3], // CIQ JB
            // ['id' => , 'order' => 3], // Cyberjaya
            ['id' => 76447, 'order' => 1], // George Town
            ['id' => 76455, 'order' => 3], // Johor
            // ['id' => , 'order' => 3], // Kajang
            // ['id' => , 'order' => 3], // Kelana Jaya
            // ['id' => , 'order' => 3], // Kota Damansara
            ['id' => 76497, 'order' => 1], // Kuala Lumpur
            ['id' => 76506, 'order' => 2], // Kuching
            ['id' => 76520, 'order' => 2], // Melaka
            ['id' => 76543, 'order' => 2], // Petaling Jaya
            // ['id' => , 'order' => 3], // Puchong
            ['id' => 76549, 'order' => 2], // Putrajaya
            // ['id' => , 'order' => 3], // Seberang Perai
            // ['id' => , 'order' => 3], // Selangor
            // ['id' => , 'order' => 3], // Sentul
            ['id' => 76559, 'order' => 3], // Seremban
            // ['id' => , 'order' => 3], // Seri Kembangan
            // ['id' => , 'order' => 3], // Setapak
            ['id' => 76561, 'order' => 2], // Shah Alam
            ['id' => 76566, 'order' => 2], // Subang Jaya

            /*
            |--------------------------------------------
            |    Philippines
            |--------------------------------------------
            */
            ['id' => 81268, 'order' => 3], // Angeles City
            ['id' => 81366, 'order' => 3], // Bacolod City
            ['id' => 81409, 'order' => 3], // Baguio City
            ['id' => 81763, 'order' => 3], // Bohol
            ['id' => 82065, 'order' => 3], // Caloocan
            ['id' => 82227, 'order' => 3], // Cavite City
            ['id' => 82238, 'order' => 3], // Cebu
            ['id' => 82396, 'order' => 3], // Davao City
            ['id' => 83045, 'order' => 3], // Las Pinas
            ['id' => 83375, 'order' => 3], // Makati City
            ['id' => 83501, 'order' => 3], // Mandaluyong
            ['id' => 143919, 'order' => 3], // Marikina City
            ['id' => 83524, 'order' => 3], // Metro Manila
            ['id' => 143920, 'order' => 3], // Muntinlupa
            ['id' => 83740, 'order' => 3], // Naga City
            // ['id' => , 'order' => 3], // Pangasinan
            // ['id' => , 'order' => 3], // Paranaque
            ['id' => 84027, 'order' => 3], // Pasay City
            ['id' => 84030, 'order' => 3], // Pasig City
            ['id' => 84301, 'order' => 3], // Quezon City
            ['id' => 84481, 'order' => 3], // San Fernando
            // ['id' => , 'order' => 3], // San Juan
            ['id' => 84932, 'order' => 3], // Tagaytay City
            ['id' => 84948, 'order' => 3], // Taguig City

            /*
            |--------------------------------------------
            |    Singapore
            |--------------------------------------------
            */

            // ['id' => , 'order' => 3], // Aljunied
            ['id' => 153475, 'order' => 3], // Ang Mo Kio
            ['id' => 153478, 'order' => 3], // Bedok
            // ['id' => , 'order' => 3], // Bishan
            // ['id' => , 'order' => 3], // Boon Lay
            // ['id' => , 'order' => 3], // Bugis
            ['id' => 153481, 'order' => 3], // Bukit Batok
            // ['id' => , 'order' => 3], // Bukit Merah
            ['id' => 153462, 'order' => 3], // Bukit Timah
            // ['id' => , 'order' => 3], // Choa Chu Kang
            // ['id' => , 'order' => 3], // Clementi
            // ['id' => , 'order' => 3], // Holland Village
            ['id' => 153472, 'order' => 3], // Hougang
            ['id' => 153480, 'order' => 3], // Jurong
            // ['id' => , 'order' => 3], // Marsiling
            ['id' => 153461, 'order' => 3], // Novena
            // ['id' => , 'order' => 3], // Orchard
            ['id' => 153479, 'order' => 3], // Pasir Ris
            ['id' => 153474, 'order' => 3], // Punggol
            // ['id' => , 'order' => 3], // Queenstown
            ['id' => 153476, 'order' => 3], // Sembawang
            ['id' => 153473, 'order' => 3], // Serangoon
            ['id' => 153477, 'order' => 3], // Tampines
            ['id' => 153469, 'order' => 3], // Toa Payoh


            /*
            |--------------------------------------------
            |    Thailand
            |--------------------------------------------
            */

            ['id' => 106448, 'order' => 1], // Bangkok
            ['id' => 106474, 'order' => 1], // Chiang Mai
            ['id' => 106475, 'order' => 2], // Chiang Rai
            ['id' => 106497, 'order' => 2], // Hat Yai
            ['id' => 106540, 'order' => 2], // Krabi
        ];

        foreach ($featCities as $city) {
            DB::table('cities')
                ->where('id', $city['id'])
                ->update(['order' => $city['order']]);
        }
    }

    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
