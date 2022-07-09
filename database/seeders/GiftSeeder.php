<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'id_wedding'        => 1,
            'name'              => 'Rumah di Bandung',
            'address'           => 'Jl. Sari Asih No.54, Sarijadi, Kec. Sukasari, Kota Bandung, Jawa Barat 40151',
            'maps'              => 'https://goo.gl/maps/1abtBDs2c71h5Nx56',
            'note'              => 'Dekat Poltekpos',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
