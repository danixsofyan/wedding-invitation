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
            'name'              => 'Darren Tan',
            'child'             => 'Putri Pertama dari',
            'name_father'       => 'Bpk Jhone Doe',
            'name_mother'       => 'Ibu Isabela Putri',
            'instagram'         => 'https://www.instagram.com/codelogydev/',
            'bank_id'           => 2,
            'acc_name'          => 'Darren Tan',
            'acc_number'        => 923123456,
            'gender'            => 'Female',
            'photo'             => 'female.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Ijunwen',
            'child'             => 'Putra Kedua dari',
            'name_father'       => 'Bpk Bohemian Rapsody S.Pd',
            'name_mother'       => 'Ibu Fricilia Ginting',
            'instagram'         => 'https://www.instagram.com/danixsofyan/',
            'bank_id'           => 1,
            'acc_name'          => 'Ijunwen',
            'acc_number'        => 456789234,
            'gender'            => 'Male',
            'photo'             => 'male.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
