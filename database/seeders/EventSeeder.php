<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Optional: Clear existing events (safe since no foreign keys)
        DB::table('events')->truncate();

        $events = [
            // January 2026
            [
                'title'       => 'New Year Gratitude Circle',
                'description' => 'Residents share memories from 2025 and set positive intentions for the new year. Light refreshments provided.',
                'event_date'  => '2026-01-05',
                'event_time'  => '10:00:00',
                'location'    => 'TV Lounge',
                'order'       => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Morning Chair Yoga Session',
                'description' => 'Gentle yoga exercises suitable for all mobility levels. Focus on breathing and flexibility.',
                'event_date'  => '2026-01-07',
                'event_time'  => '09:30:00',
                'location'    => 'Garden',
                'order'       => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // February 2026
            [
                'title'       => 'Valentine’s Day Memory Lane',
                'description' => 'Share love stories and old photos. Heart-shaped cookies and tea will be served.',
                'event_date'  => '2026-02-14',
                'event_time'  => '14:00:00',
                'location'    => 'Activity Room',
                'order'       => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Indoor Plant Care Workshop',
                'description' => 'Learn how to care for indoor plants. Each resident gets to take home a small potted plant.',
                'event_date'  => '2026-02-20',
                'event_time'  => '10:30:00',
                'location'    => 'Garden Patio',
                'order'       => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // March 2026
            [
                'title'       => 'Women’s Day Celebration',
                'description' => 'Special talk by a guest speaker + musical performance. Everyone welcome.',
                'event_date'  => '2026-03-08',
                'event_time'  => '15:00:00',
                'location'    => 'Main Hall',
                'order'       => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Sinhala & Tamil New Year Games',
                'description' => 'Traditional games like elle, olinda and kanam. Prizes for winners!',
                'event_date'  => '2026-03-31',
                'event_time'  => '09:00:00',
                'location'    => 'Garden',
                'order'       => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // April 2026
            [
                'title'       => 'Avurudu Sweet Making Demo',
                'description' => 'Learn to make kokis, aluwa and other traditional sweets. Tasting session included.',
                'event_date'  => '2026-04-10',
                'event_time'  => '10:00:00',
                'location'    => 'Kitchen Activity Area',
                'order'       => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Movie Afternoon – Classic Sinhala Film',
                'description' => 'Screening of “Gamperaliya” with popcorn and discussion after.',
                'event_date'  => '2026-04-18',
                'event_time'  => '14:30:00',
                'location'    => 'TV Lounge',
                'order'       => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // May 2026 (example future month)
            [
                'title'       => 'Vesak Lantern Making',
                'description' => 'Create beautiful Vesak lanterns together. Materials provided.',
                'event_date'  => '2026-05-15',
                'event_time'  => '09:30:00',
                'location'    => 'Activity Room',
                'order'       => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        DB::table('events')->insert($events);

        $this->command->info('Events seeded successfully! ' . count($events) . ' sample events added.');
    }
}