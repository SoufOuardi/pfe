<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $vendorRole = Role::firstOrCreate(['name' => 'vendor']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']); // Assuming 'admin' already exists

        // Create a user and assign the 'user' role
        $user = User::create([
            'name' => 'User Name',
            'email' => 'user@example.com',
            'password' => bcrypt('password123'), // Use a secure password
        ]);
        $user->assignRole($userRole);

        // Create a vendor and assign the 'vendor' role
        $vendor = User::create([
            'name' => 'Vendor Name',
            'email' => 'vendor@example.com',
            'password' => bcrypt('password123'),
        ]);
        $vendor->assignRole($vendorRole);

        // Create an admin and assign the 'admin' role
        $admin = User::create([
            'name' => 'Admin Name',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);
        $admin->assignRole($adminRole);
    }
}
