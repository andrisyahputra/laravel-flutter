<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Andri Syahputra',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => NOW(),
            'password' => Hash::make('superadmin@gmail.com')
        ]);
    }
}
