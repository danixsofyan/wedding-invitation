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
            'wedding_id'        => 1,
            'type'              => 'Akad',
            'date'              => '2022-11-05 08:00:00',
            'address'           => 'Gedung Mayor Jendral Ar Moer',
            'maps'              => 'https://goo.gl/maps/5uiLbVMak7FZ5edz6',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Resepsi',
            'date'              => '2022-11-05 10:00:00',
            'address'           => 'Gedung Mayor Jendral Ar Moer',
            'maps'              => 'https://goo.gl/maps/5uiLbVMak7FZ5edz6',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
