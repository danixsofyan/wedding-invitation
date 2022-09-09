<?php

namespace Database\Seeders;

use App\Models\Wedding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wedding::create([
            'name'          => 'Fini & Yoga',
            'note'          => 'A great marriage is not when the perfect couple comes together. \
            It is when an imperfect couple learns to enjoy their differences.',
            'status'        => 'Active',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
