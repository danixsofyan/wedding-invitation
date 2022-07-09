<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'id_wedding'        => 1,
            'type'              => 'Akad',
            'date'              => '2022-11-14 08:00:00',
            'address'           => 'Gedung UPI Purwakarta Jl. Veteran No.8, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41115',
            'maps'              => 'https://goo.gl/maps/wDSU5gdyqNvyWpE2A',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Detail::create([
            'id_wedding'        => 1,
            'type'              => 'Resepsi',
            'date'              => '2022-11-14 08:00:00',
            'address'           => 'Gedung UPI Purwakarta Jl. Veteran No.8, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41115',
            'maps'              => 'https://goo.gl/maps/wDSU5gdyqNvyWpE2A',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
