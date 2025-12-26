<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('🌱 Starting Care365 Database Seeding...');
        $this->command->newLine();

        // Order is important - seed in dependency order
        $this->call([
            BranchSeeder::class,
            UserSeeder::class,
            ClientSeeder::class,
            DoctorSeeder::class,
            MedicationSeeder::class,
            ClientOutingSeeder::class,
        ]);

        $this->command->newLine();
        $this->command->info('✅ Database seeding completed successfully!');
        $this->command->newLine();
        $this->command->info('📋 Summary:');
        $this->command->info('   - 4 Branches created');
        $this->command->info('   - 20+ Users created (Admin, Managers, Careers, Chefs, Guardians)');
        $this->command->info('   - 6 Clients created with guardians');
        $this->command->info('   - 7 Doctors created and assigned to clients');
        $this->command->info('   - 12-30 Medications created with 7 days of records');
        $this->command->info('   - 18-42 Client outings created');
        $this->command->newLine();
        $this->command->info('🔑 Login Credentials (password: password):');
        $this->command->info('   Admin:   admin@care365.com');
        $this->command->info('   Manager: john.silva@care365.com');
        $this->command->info('   Career:  nimal.bandara@care365.com');
        $this->command->info('   Chef:    chef.ravi@care365.com');
        $this->command->info('   User:    robert.silva@care365.com');
        $this->command->newLine();
    }
}
