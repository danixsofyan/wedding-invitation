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
            'name'          => 'Bank Mandiri',
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

        Bank::create([
            'name'          => 'CIMB Niaga',
            'logo'          => 'cimb.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'OCBC NISP',
            'logo'          => 'ocbc.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'HSBC',
            'logo'          => 'hsbc.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Panin Bank',
            'logo'          => 'panin.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Bank Permata',
            'logo'          => 'permata.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'DBS',
            'logo'          => 'dbs.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Bank BJB',
            'logo'          => 'bjb.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Bank Bukopin',
            'logo'          => 'bukopin.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Bank Mega',
            'logo'          => 'mega.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Gopay',
            'logo'          => 'gopay.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'OVO',
            'logo'          => 'ovo.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Bank::create([
            'name'          => 'Link aja',
            'logo'          => 'linkaja.png',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
