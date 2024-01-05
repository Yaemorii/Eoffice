<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan beberapa admin dengan NIK yang berbeda
        User::create([
            'name' => 'Wijaya_Kesuma',
            'nip' => '197710172009031001',
            'email' => 'wijaya345.wk@gmail.com',
            'username' => 'Wijaya',
            'password' => Hash::make('Jaya'),
            'role' => 'Admin', // Tambahkan peran 'Admin'
        ]);

        User::create([
            'name' => 'Muhammad_Nabil',
            'nip' => '2003',
            'email' => 'nabil@gmail.com',
            'username' => 'nabil',
            'password' => Hash::make('nabil'),
            'role' => 'Admin', // Tambahkan peran 'Admin'
        ]);

        User::create([
            'name' => 'admin',
            'nip' => '2003',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'Admin', // Tambahkan peran 'Admin'
        ]);

        User::create([
            'name' => 'Edo',
            'nip' => '1993',
            'email' => 'Edo@gmail.com',
            'username' => 'edo',
            'password' => Hash::make('edo'),
            'role' => 'Admin', // Tambahkan peran 'Admin'
        ]);

    }
}