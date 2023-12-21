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

    }
}