<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class   UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Andri Syahputra',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => NOW(),
            'role' => 'admin',
            'phone' => '6281278391690',
            'bio' => 'andri dev',
            'password' => Hash::make('superuser@gmail.com')
        ]);
        User::create([
            'name' => 'Andri Syahputra',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => NOW(),
            'role' => 'superadmin',
            'phone' => '6281278391690',
            'bio' => 'flutter dan laravel dev',
            'password' => Hash::make('superadmin@gmail.com')
        ]);
    }
}
