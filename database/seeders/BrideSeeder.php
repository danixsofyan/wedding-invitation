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
            'wedding_id'        => 1,
            'name'              => 'Siti Nabila Lutfinia, S.Pd',
            'child'             => 'Putri Pertama dari',
            'name_father'       => 'Bpk Drs. Deni Faisal Abdurahman',
            'name_mother'       => 'Ibu Dra. Eem Masruroh',
            'instagram'         => 'https://www.instagram.com/lutfinianabilaa/',
            'bank_id'           => 2,
            'acc_name'          => 'Siti Nabila Lutfinia',
            'acc_number'        => 396962636,
            'gender'            => 'Female',
            'photo'             => 'fini.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Yoga Asmara, S,Pd., M.Pd.',
            'child'             => 'Putra Kedua dari',
            'name_father'       => 'Bpk Suherman S.Pd',
            'name_mother'       => 'Ibu Nining',
            'instagram'         => 'https://www.instagram.com/yogaasmaraa/',
            'bank_id'           => 1,
            'acc_name'          => 'Yoga Asmara',
            'acc_number'        => 2330288542,
            'gender'            => 'Male',
            'photo'             => 'yoga.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
