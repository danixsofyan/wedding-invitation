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
            'type'              => 'Acara Pernihakan',
            'date'              => '2050-11-05 08:00:00',
            'address'           => 'Jakarta Cathedral',
            'maps'              => 'https://maps.app.goo.gl/C3HWf7TsJvMzwLb27',
            'calendar'          => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Darren+%26+Jun&details=Kami+sangat+berharap+anda+dapat+hadir+di+moment+bahagia+ini&location=Jakarta+International+Stadium+(JIS)&dates=20501105T010000Z/20221105T080000Z&ctz=Asia/Jakarta',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Resepsi',
            'date'              => '2050-11-05 10:00:00',
            'address'           => 'Jakarta International Stadium (JIS)',
            'maps'              => 'https://maps.app.goo.gl/QtqneaW9bjVL4JDZ8',
            'calendar'          => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Darren+%26+Jun&details=Kami+sangat+berharap+anda+dapat+hadir+di+moment+bahagia+ini&location=Jakarta+International+Stadium+(JIS)&dates=20501105T010000Z/20221105T080000Z&ctz=Asia/Jakarta',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
