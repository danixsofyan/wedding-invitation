<?php

namespace Database\Seeders;

use App\Models\Wishes;
use Illuminate\Database\Seeder;

class WishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wishes::create([
            'wedding_id'            => 1,
            'name'                  => 'Dani Sofyan',
            'comment'               => 'Semoga sakinah mawadah warohmah',
            'created_at'            => now(),
            'updated_at'            => now()
        ]);
    }
}
