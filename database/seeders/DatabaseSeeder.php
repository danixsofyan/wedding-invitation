<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(WeddingSeeder::class);
        $this->call(BrideSeeder::class);
        $this->call(DetailSeeder::class);
        $this->call(GiftSeeder::class);
        $this->call(RsvpSeeder::class);
        $this->call(WishesSeeder::class);
        $this->call(ThankSeeder::class);
    }
}
