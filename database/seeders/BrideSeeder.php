<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::create([
            'id_wedding'        => 1,
            'name'              => 'Yoga Asmara',
            'name_father'       => 'Father of Yoga',
            'name_mother'       => 'Mother of yoga',
            'instagram'         => 'https://www.instagram.com/yogaasmaraa/',
            'id_bank'           => 1,
            'acc_name'          => 'Yoga Asmara',
            'acc_number'        => 2332502043,
            'gender'            => 'Male',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'id_wedding'        => 1,
            'name'              => 'Lutfinia Nabila',
            'name_father'       => 'Father of Fini',
            'name_mother'       => 'Mother of Fini',
            'instagram'         => 'https://www.instagram.com/lutfinianabilaa/',
            'id_bank'           => 2,
            'acc_name'          => 'Lutfinia Nabila',
            'acc_number'        => 396962636,
            'gender'            => 'Female',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
