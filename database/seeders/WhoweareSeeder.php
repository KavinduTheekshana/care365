<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Whoweare;

class WhoweareSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Who We Are',
                'description' => 'Care 365 is a trusted elderly care provider offering safe and compassionate living.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 1,
                'is_public' => true,
            ],
            [
                'title' => 'Our Vision',
                'description' => 'To be a leading elderly care home known for compassion and quality service.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 2,
                'is_public' => true,
            ],
            [
                'title' => 'Our Mission',
                'description' => 'To deliver personalized care that supports dignity and well-being.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 3,
                'is_public' => true,
            ],
            [
                'title' => 'Our Values',
                'description' => 'Respect, empathy, integrity, and excellence guide everything we do.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 4,
                'is_public' => true,
            ],
            [
                'title' => 'Our Care Approach',
                'description' => 'Holistic care focused on physical, emotional, and social well-being.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 5,
                'is_public' => true,
            ],
            [
                'title' => 'Why Choose Care 365',
                'description' => '24/7 support, experienced caregivers, and a safe home environment.',
                'image_path' => 'whoweare_default_img.jpg',
                'display_order' => 6,
                'is_public' => true,
            ],
        ];

        foreach ($items as $item) {
            Whoweare::create($item);
        }
    }
}
