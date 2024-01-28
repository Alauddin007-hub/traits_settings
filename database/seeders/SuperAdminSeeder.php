<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Masum Ahmed', 
            'email' => 'masum@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Mizhanur', 
            'email' => 'mizan@gmail.com.com',
            'password' => Hash::make('admin123')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Ikbal Hossain', 
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('password')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
