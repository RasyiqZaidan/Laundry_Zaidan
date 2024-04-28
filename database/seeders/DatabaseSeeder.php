<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run()
    {
       $this->call(RoleSeeder::class);
       $this->call(UserSeeder::class);
        
    }
    
}