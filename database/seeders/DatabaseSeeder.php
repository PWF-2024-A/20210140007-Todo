<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Database\Factories\TodoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create(
            [
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'email_verified_at' => now(),
             'password' => '$2y$10$fELO0pCoh59cI1.cB2HAW.nRxNBHOic.ovFMXGYCaA0Qf1ESTZXOC',
             'remember_token' => Str::random(10),
             'is_admin' => true
         ]
        );
        User::factory(100)->create();
        TodoFactory::factory(500)->create();
    }
}
