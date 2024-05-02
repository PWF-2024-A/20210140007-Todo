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
             'password' => '$2y$10$92IXUNpkjo0roQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             'remember_token' => Str::random(10),
             'is_admin' => true
         ]
        );
        User::factory(100)->create();
        TodoFactory::factory(500)->create();
    }
}
