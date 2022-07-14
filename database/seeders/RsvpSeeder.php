<?php

namespace Database\Seeders;

use App\Models\Rsvp;
use Illuminate\Database\Seeder;

class RsvpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rsvp::create([
            'wedding_id'            => 1,
            'name'                  => 'Dani Sofyan',
            'amount'                => 2,
            'status'                => 'Saya akan datang',
            'created_at'            => now(),
            'updated_at'            => now()
        ]);
    }
}
