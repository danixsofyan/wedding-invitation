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
            'wedding_id'        => 1,
            'name'              => 'Rumah Fini',
            'address'           => 'Puskopad, Jalan Garuda III Blok b No.31,. Ciseureuh, Purwakarta PURWAKARTA, KAB. PURWAKARTA, JAWA BARAT, ID 41118',
            'maps'              => 'https://goo.gl/maps/1abtBDs2c71h5Nx56',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
