<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('admin');

        $petugas = User::create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'Petugas@gmail.com',
            'password' => bcrypt('petugas123'),
        ]);

        $petugas->assignRole('petugas');

        $pimpinan = User::create([
            'name' => 'Pimpinan',
            'username' => 'Pimpinan',
            'email' => 'Pimpinan@gmail.com',
            'password' => bcrypt('Pimpinan123'),
        ]);

        $pimpinan->assignRole('pimpinan');
    }
}
