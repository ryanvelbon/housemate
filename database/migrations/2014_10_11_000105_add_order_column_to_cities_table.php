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
            |    Japan
            |--------------------------------------------
            */
            ['id' => 63233, 'order' => 3], // Akita
            ['id' => 63249, 'order' => 3], // Aomori
            ['id' => 63259, 'order' => 3], // Asahikawa
            ['id' => 63365, 'order' => 3], // Fukuoka
            ['id' => 63416, 'order' => 3], // Hakodate
            ['id' => 63430, 'order' => 3], // Hanamaki
            ['id' => 63499, 'order' => 2], // Hiroshima
            ['id' => 63658, 'order' => 3], // Kagoshima
            ['id' => 63808, 'order' => 3], // Kita Kyushu
            ['id' => 63837, 'order' => 3], // Komatsu
            ['id' => 63859, 'order' => 3], // Kumamoto
            ['id' => 63886, 'order' => 3], // Kushiro
            ['id' => 64009, 'order' => 3], // Miyazaki
            ['id' => 64024, 'order' => 3], // Monbetsu
            ['id' => 64071, 'order' => 2], // Nagasaki
            ['id' => 64078, 'order' => 3], // Nagoya
            ['id' => 64180, 'order' => 3], // Obihiro
            ['id' => 64195, 'order' => 3], // Okayama
            ['id' => 64200, 'order' => 3], // Okinawa
            ['id' => 64214, 'order' => 1], // Osaka
            ['id' => 64285, 'order' => 3], // Sapporo
            ['id' => 64300, 'order' => 3], // Sendai
            ['id' => 64366, 'order' => 3], // Shizuoka
            ['id' => 64427, 'order' => 3], // Takamatsu
            ['id' => 64497, 'order' => 3], // Tokushima
            ['id' => 64500, 'order' => 1], // Tokyo
            ['id' => 64519, 'order' => 3], // Tottori
            ['id' => 64521, 'order' => 3], // Toyama
            ['id' => 64576, 'order' => 3], // Ube
            ['id' => 64638, 'order' => 3], // Yamagata


            /*
            |--------------------------------------------
            |    Indonesia
            |--------------------------------------------
            */
            ['id' => 56178, 'order' => 3], // Ambon
            ['id' => 56190, 'order' => 3], // Balikpapan
            ['id' => 56193, 'order' => 3], // Banda Aceh
            ['id' => 56195, 'order' => 3], // Bandar Lampung
            ['id' => 56196, 'order' => 1], // Bandung
            ['id' => 56203, 'order' => 3], // Banjarmasin
            ['id' => 56206, 'order' => 3], // Banyuwangi
            ['id' => 56208, 'order' => 2], // Batam
            ['id' => 57017, 'order' => 3], // Belitung (Tanjung Pandan)
            ['id' => 56217, 'order' => 3], // Bengkulu
            ['id' => 56226, 'order' => 2], // Bogor
            ['id' => 56263, 'order' => 1], // Denpasar
            ['id' => 56265, 'order' => 3], // Depok
            ['id' => 56285, 'order' => 3], // Gorontalo
            ['id' => 56722, 'order' => 3], // Kota Administrasi Jakarta Barat
            ['id' => 56723, 'order' => 3], // Kota Administrasi Jakarta Pusat
            ['id' => 56724, 'order' => 3], // Kota Administrasi Jakarta Selatan
            ['id' => 56725, 'order' => 3], // Kota Administrasi Jakarta Timur
            ['id' => 56726, 'order' => 3], // Kota Administrasi Jakarta Utara
            ['id' => 56294, 'order' => 3], // Jambi
            ['id' => 56299, 'order' => 3], // Jayapura
            ['id' => 56301, 'order' => 3], // Jember
            ['id' => 56712, 'order' => 3], // Kendari
            ['id' => 56826, 'order' => 3], // Kupang
            ['id' => 56827, 'order' => 3], // Kuta
            ['id' => 56830, 'order' => 3], // Labuan Bajo
            ['id' => 56855, 'order' => 3], // Makassar
            ['id' => 56856, 'order' => 3], // Malang
            ['id' => 56858, 'order' => 3], // Manado
            ['id' => 56867, 'order' => 2], // Medan
            ['id' => 56893, 'order' => 3], // Padang
            ['id' => 56898, 'order' => 3], // Palembang
            ['id' => 56927, 'order' => 3], // Pekanbaru
            ['id' => 56965, 'order' => 3], // Semarang
            ['id' => 57012, 'order' => 3], // Surakarta
            ['id' => 57011, 'order' => 2], // Surabaya
            ['id' => 57061, 'order' => 2], // Yogyakarta


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
            |    South Korea
            |--------------------------------------------
            */
            ['id' => 65261, 'order' => 3], // Andong-si
            ['id' => 65278, 'order' => 3], // Busan
            ['id' => 65300, 'order' => 3], // Daegu
            ['id' => 65301, 'order' => 3], // Daejeon
            ['id' => 65369, 'order' => 3], // Gyeongju-si
            ['id' => 65400, 'order' => 3], // Incheon
            ['id' => 65413, 'order' => 3], // Jeonju-si
            ['id' => 65498, 'order' => 1], // Seoul
            ['id' => 65512, 'order' => 3], // Suwon-si


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


            /*
            |--------------------------------------------
            |    Vietnam
            |--------------------------------------------
            */
            ['id' => 130187, 'order' => 3], // Ca Mau
            ['id' => 130195, 'order' => 2], // Da Nang
            ['id' => 130201, 'order' => 1], // Hanoi
            ['id' => 130202, 'order' => 1], // Ho Chi Minh City
            ['id' => 130554, 'order' => 3], // Hue
            ['id' => 130576, 'order' => 3], // Nha Trang
            ['id' => 130583, 'order' => 3], // Pleiku
            ['id' => 130584, 'order' => 3], // Qui Nhon
            ['id' => 130588, 'order' => 3], // Rach Gia
            ['id' => 130596, 'order' => 3], // Tamky
            ['id' => 130597, 'order' => 3], // Thanh Hoa
            ['id' => 130618, 'order' => 3], // Tuy Hoa
            ['id' => 130622, 'order' => 3], // Vinh City
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
