<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'name'          => 'BCA',
            'logo'          => 'bca.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'BNI',
            'logo'          => 'bni.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'BRI',
            'logo'          => 'bri.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Mandiri',
            'logo'          => 'mandiri.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'BSI',
            'logo'          => 'bsi.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Jenius',
            'logo'          => 'jenius.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Jago',
            'logo'          => 'jago.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
