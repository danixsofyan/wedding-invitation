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
            'address'           => 'Puskopad
            Jalan Garuda III Blok B No.31
            Ciseureuh Purwakarta, Kab. Purwakarta
            Jawa Barat 41118
            ',
            'maps'              => '',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
