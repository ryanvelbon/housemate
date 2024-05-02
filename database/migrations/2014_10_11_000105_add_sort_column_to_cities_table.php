<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This migration adds an `sort` column to the `cities` table.
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
            $table->unsignedTinyInteger('sort')->nullable();
        });

        // Update the order for cities that should be featured
        $featCities = [

            /*
            |--------------------------------------------
            |    Japan
            |--------------------------------------------
            */
            ['id' => 63233, 'sort' => 3], // Akita
            ['id' => 63249, 'sort' => 3], // Aomori
            ['id' => 63259, 'sort' => 3], // Asahikawa
            ['id' => 63365, 'sort' => 3], // Fukuoka
            ['id' => 63416, 'sort' => 3], // Hakodate
            ['id' => 63430, 'sort' => 3], // Hanamaki
            ['id' => 63499, 'sort' => 2], // Hiroshima
            ['id' => 63658, 'sort' => 3], // Kagoshima
            ['id' => 63808, 'sort' => 3], // Kita Kyushu
            ['id' => 63837, 'sort' => 3], // Komatsu
            ['id' => 63859, 'sort' => 3], // Kumamoto
            ['id' => 63886, 'sort' => 3], // Kushiro
            ['id' => 64009, 'sort' => 3], // Miyazaki
            ['id' => 64024, 'sort' => 3], // Monbetsu
            ['id' => 64071, 'sort' => 2], // Nagasaki
            ['id' => 64078, 'sort' => 3], // Nagoya
            ['id' => 64180, 'sort' => 3], // Obihiro
            ['id' => 64195, 'sort' => 3], // Okayama
            ['id' => 64200, 'sort' => 3], // Okinawa
            ['id' => 64214, 'sort' => 1], // Osaka
            ['id' => 64285, 'sort' => 3], // Sapporo
            ['id' => 64300, 'sort' => 3], // Sendai
            ['id' => 64366, 'sort' => 3], // Shizuoka
            ['id' => 64427, 'sort' => 3], // Takamatsu
            ['id' => 64497, 'sort' => 3], // Tokushima
            ['id' => 64500, 'sort' => 1], // Tokyo
            ['id' => 64519, 'sort' => 3], // Tottori
            ['id' => 64521, 'sort' => 3], // Toyama
            ['id' => 64576, 'sort' => 3], // Ube
            ['id' => 64638, 'sort' => 3], // Yamagata


            /*
            |--------------------------------------------
            |    Indonesia
            |--------------------------------------------
            */
            ['id' => 56178, 'sort' => 3], // Ambon
            ['id' => 56190, 'sort' => 3], // Balikpapan
            ['id' => 56193, 'sort' => 3], // Banda Aceh
            ['id' => 56195, 'sort' => 3], // Bandar Lampung
            ['id' => 56196, 'sort' => 1], // Bandung
            ['id' => 56203, 'sort' => 3], // Banjarmasin
            ['id' => 56206, 'sort' => 3], // Banyuwangi
            ['id' => 56208, 'sort' => 2], // Batam
            ['id' => 57017, 'sort' => 3], // Belitung (Tanjung Pandan)
            ['id' => 56217, 'sort' => 3], // Bengkulu
            ['id' => 56226, 'sort' => 2], // Bogor
            ['id' => 56263, 'sort' => 1], // Denpasar
            ['id' => 56265, 'sort' => 3], // Depok
            ['id' => 56285, 'sort' => 3], // Gorontalo
            ['id' => 56722, 'sort' => 3], // Kota Administrasi Jakarta Barat
            ['id' => 56723, 'sort' => 3], // Kota Administrasi Jakarta Pusat
            ['id' => 56724, 'sort' => 3], // Kota Administrasi Jakarta Selatan
            ['id' => 56725, 'sort' => 3], // Kota Administrasi Jakarta Timur
            ['id' => 56726, 'sort' => 3], // Kota Administrasi Jakarta Utara
            ['id' => 56294, 'sort' => 3], // Jambi
            ['id' => 56299, 'sort' => 3], // Jayapura
            ['id' => 56301, 'sort' => 3], // Jember
            ['id' => 56712, 'sort' => 3], // Kendari
            ['id' => 56826, 'sort' => 3], // Kupang
            ['id' => 56827, 'sort' => 3], // Kuta
            ['id' => 56830, 'sort' => 3], // Labuan Bajo
            ['id' => 56855, 'sort' => 3], // Makassar
            ['id' => 56856, 'sort' => 3], // Malang
            ['id' => 56858, 'sort' => 3], // Manado
            ['id' => 56867, 'sort' => 2], // Medan
            ['id' => 56893, 'sort' => 3], // Padang
            ['id' => 56898, 'sort' => 3], // Palembang
            ['id' => 56927, 'sort' => 3], // Pekanbaru
            ['id' => 56965, 'sort' => 3], // Semarang
            ['id' => 57012, 'sort' => 3], // Surakarta
            ['id' => 57011, 'sort' => 2], // Surabaya
            ['id' => 57061, 'sort' => 2], // Yogyakarta


            /*
            |--------------------------------------------
            |    Malaysia
            |--------------------------------------------
            */
            ['id' => 76411, 'sort' => 3], // Ampang
            // ['id' => , 'sort' => 3], // Bandar Sunway
            // ['id' => , 'sort' => 3], // Bandar Utama
            // ['id' => , 'sort' => 3], // Bangsar
            // ['id' => , 'sort' => 3], // Cheras
            // ['id' => , 'sort' => 3], // CIQ JB
            // ['id' => , 'sort' => 3], // Cyberjaya
            ['id' => 76447, 'sort' => 1], // George Town
            ['id' => 76455, 'sort' => 3], // Johor
            // ['id' => , 'sort' => 3], // Kajang
            // ['id' => , 'sort' => 3], // Kelana Jaya
            // ['id' => , 'sort' => 3], // Kota Damansara
            ['id' => 76497, 'sort' => 1], // Kuala Lumpur
            ['id' => 76506, 'sort' => 2], // Kuching
            ['id' => 76520, 'sort' => 2], // Melaka
            ['id' => 76543, 'sort' => 2], // Petaling Jaya
            // ['id' => , 'sort' => 3], // Puchong
            ['id' => 76549, 'sort' => 2], // Putrajaya
            // ['id' => , 'sort' => 3], // Seberang Perai
            // ['id' => , 'sort' => 3], // Selangor
            // ['id' => , 'sort' => 3], // Sentul
            ['id' => 76559, 'sort' => 3], // Seremban
            // ['id' => , 'sort' => 3], // Seri Kembangan
            // ['id' => , 'sort' => 3], // Setapak
            ['id' => 76561, 'sort' => 2], // Shah Alam
            ['id' => 76566, 'sort' => 2], // Subang Jaya


            /*
            |--------------------------------------------
            |    Philippines
            |--------------------------------------------
            */
            ['id' => 81268, 'sort' => 3], // Angeles City
            ['id' => 81366, 'sort' => 3], // Bacolod City
            ['id' => 81409, 'sort' => 3], // Baguio City
            ['id' => 81763, 'sort' => 3], // Bohol
            ['id' => 82065, 'sort' => 3], // Caloocan
            ['id' => 82227, 'sort' => 3], // Cavite City
            ['id' => 82238, 'sort' => 3], // Cebu
            ['id' => 82396, 'sort' => 3], // Davao City
            ['id' => 83045, 'sort' => 3], // Las Pinas
            ['id' => 83375, 'sort' => 3], // Makati City
            ['id' => 83501, 'sort' => 3], // Mandaluyong
            ['id' => 143919, 'sort' => 3], // Marikina City
            ['id' => 83524, 'sort' => 3], // Metro Manila
            ['id' => 143920, 'sort' => 3], // Muntinlupa
            ['id' => 83740, 'sort' => 3], // Naga City
            // ['id' => , 'sort' => 3], // Pangasinan
            // ['id' => , 'sort' => 3], // Paranaque
            ['id' => 84027, 'sort' => 3], // Pasay City
            ['id' => 84030, 'sort' => 3], // Pasig City
            ['id' => 84301, 'sort' => 3], // Quezon City
            ['id' => 84481, 'sort' => 3], // San Fernando
            // ['id' => , 'sort' => 3], // San Juan
            ['id' => 84932, 'sort' => 3], // Tagaytay City
            ['id' => 84948, 'sort' => 3], // Taguig City


            /*
            |--------------------------------------------
            |    Singapore
            |--------------------------------------------
            */
            // ['id' => , 'sort' => 3], // Aljunied
            ['id' => 153475, 'sort' => 3], // Ang Mo Kio
            ['id' => 153478, 'sort' => 3], // Bedok
            // ['id' => , 'sort' => 3], // Bishan
            // ['id' => , 'sort' => 3], // Boon Lay
            // ['id' => , 'sort' => 3], // Bugis
            ['id' => 153481, 'sort' => 3], // Bukit Batok
            // ['id' => , 'sort' => 3], // Bukit Merah
            ['id' => 153462, 'sort' => 3], // Bukit Timah
            // ['id' => , 'sort' => 3], // Choa Chu Kang
            // ['id' => , 'sort' => 3], // Clementi
            // ['id' => , 'sort' => 3], // Holland Village
            ['id' => 153472, 'sort' => 3], // Hougang
            ['id' => 153480, 'sort' => 3], // Jurong
            // ['id' => , 'sort' => 3], // Marsiling
            ['id' => 153461, 'sort' => 3], // Novena
            // ['id' => , 'sort' => 3], // Orchard
            ['id' => 153479, 'sort' => 3], // Pasir Ris
            ['id' => 153474, 'sort' => 3], // Punggol
            // ['id' => , 'sort' => 3], // Queenstown
            ['id' => 153476, 'sort' => 3], // Sembawang
            ['id' => 153473, 'sort' => 3], // Serangoon
            ['id' => 153477, 'sort' => 3], // Tampines
            ['id' => 153469, 'sort' => 3], // Toa Payoh

            /*
            |--------------------------------------------
            |    South Korea
            |--------------------------------------------
            */
            ['id' => 65261, 'sort' => 3], // Andong-si
            ['id' => 65278, 'sort' => 3], // Busan
            ['id' => 65300, 'sort' => 3], // Daegu
            ['id' => 65301, 'sort' => 3], // Daejeon
            ['id' => 65369, 'sort' => 3], // Gyeongju-si
            ['id' => 65400, 'sort' => 3], // Incheon
            ['id' => 65413, 'sort' => 3], // Jeonju-si
            ['id' => 65498, 'sort' => 1], // Seoul
            ['id' => 65512, 'sort' => 3], // Suwon-si


            /*
            |--------------------------------------------
            |    Thailand
            |--------------------------------------------
            */
            ['id' => 106448, 'sort' => 1], // Bangkok
            ['id' => 106474, 'sort' => 1], // Chiang Mai
            ['id' => 106475, 'sort' => 2], // Chiang Rai
            ['id' => 106497, 'sort' => 2], // Hat Yai
            ['id' => 106540, 'sort' => 2], // Krabi


            /*
            |--------------------------------------------
            |    Vietnam
            |--------------------------------------------
            */
            ['id' => 130187, 'sort' => 3], // Ca Mau
            ['id' => 130195, 'sort' => 2], // Da Nang
            ['id' => 130201, 'sort' => 1], // Hanoi
            ['id' => 130202, 'sort' => 1], // Ho Chi Minh City
            ['id' => 130554, 'sort' => 3], // Hue
            ['id' => 130576, 'sort' => 3], // Nha Trang
            ['id' => 130583, 'sort' => 3], // Pleiku
            ['id' => 130584, 'sort' => 3], // Qui Nhon
            ['id' => 130588, 'sort' => 3], // Rach Gia
            ['id' => 130596, 'sort' => 3], // Tamky
            ['id' => 130597, 'sort' => 3], // Thanh Hoa
            ['id' => 130618, 'sort' => 3], // Tuy Hoa
            ['id' => 130622, 'sort' => 3], // Vinh City
        ];

        foreach ($featCities as $city) {
            DB::table('cities')
                ->where('id', $city['id'])
                ->update(['sort' => $city['sort']]);
        }
    }

    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn('sort');
        });
    }
};
