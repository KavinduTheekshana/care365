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
        // Create Admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@care365.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );
        $admin->syncRoles(['admin']);

        // Create Manager user
        $manager = User::firstOrCreate(
            ['email' => 'manager@care365.com'],
            [
                'name' => 'Manager User',
                'password' => Hash::make('password'),
            ]
        );
        $manager->syncRoles(['manager']);

        // Create Career user
        $career = User::firstOrCreate(
            ['email' => 'career@care365.com'],
            [
                'name' => 'Career User',
                'password' => Hash::make('password'),
            ]
        );
        $career->syncRoles(['career']);

        // Create Chef user
        $chef = User::firstOrCreate(
            ['email' => 'chef@care365.com'],
            [
                'name' => 'Chef User',
                'password' => Hash::make('password'),
            ]
        );
        $chef->syncRoles(['chef']);

        // Create regular User
        $user = User::firstOrCreate(
            ['email' => 'user@care365.com'],
            [
                'name' => 'Regular User',
                'password' => Hash::make('password'),
            ]
        );
        $user->syncRoles(['user']);

        $this->command->info('Test users created:');
        $this->command->info('Admin: admin@care365.com / password');
        $this->command->info('Manager: manager@care365.com / password');
        $this->command->info('Career: career@care365.com / password');
        $this->command->info('Chef: chef@care365.com / password');
        $this->command->info('User: user@care365.com / password');
    }
}
