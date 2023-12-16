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
            'name' => 'Fikri_Haryadi',
            'nip' => '198602242010011008',
            'email' => 'fikrifharyadi@gmail.com',
            'username' => 'Fikri',
            'password' => Hash::make('Fikri'),
        ]);

        User::create([
            'name' => 'Teddy_Endar_Sukmana',
            'nip' => '198407262009031001',
            'email' => 'teddyendars84@gmail.com',
            'username' => 'Teddy',
            'password' => Hash::make('Teddy'),
        ]);

        User::create([
            'name' => 'Wijaya_Kesuma',
            'nip' => '197710172009031001',
            'email' => 'wijaya345.wk@gmail.com',
            'username' => 'Wijaya',
            'password' => Hash::make('Jaya'),
        ]);

    }
}