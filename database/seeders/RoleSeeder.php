<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    private $permissions = [
        'dashboard',
        'transaction-order',
        'history-order',
        'masterdata-konsumen',
        'masterdata-petugas',
        'masterdata-jenis_layanan',
        'masterdata-jenis_pembayaran',
        'masterdata-pemimpin'
    ];
    
    public function run(): void
    {
        // Membuat izin-izin jika belum ada
        foreach ($this->permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

        // Membuat peran 'Admin' jika belum ada
        if (!Role::where('name', 'Admin')->exists()) {
            $adminRole = Role::create([
                'name' => 'Admin',
                'guard_name' => 'web',
            ]);
            // Menetapkan izin-izin ke peran 'Admin'
            $adminRole->syncPermissions($this->permissions);
        }
        
        // Membuat peran 'Petugas' jika belum ada
        if (!Role::where('name', 'Petugas')->exists()) {
            $petugasRole = Role::create([
                'name' => 'Petugas',
                'guard_name' => 'web',
            ]);
            // Menetapkan izin-izin ke peran 'Petugas'
            $petugasRole->syncPermissions([
                'dashboard',
                'transaction-order',
                'history-order',
                'masterdata-konsumen',
            ]);
        }
        
        // Membuat peran 'Pimpinan' jika belum ada
        if (!Role::where('name', 'Pimpinan')->exists()) {
            $pimpinanRole = Role::create([
                'name' => 'Pimpinan',
                'guard_name' => 'web',
            ]);
            // Menetapkan izin-izin ke peran 'Pimpinan'
            $pimpinanRole->syncPermissions([
                'dashboard',
                'masterdata-konsumen',
                'masterdata-petugas',
                'masterdata-jenis_layanan',
                'masterdata-jenis_pembayaran',
            ]);
        }
    }
}
