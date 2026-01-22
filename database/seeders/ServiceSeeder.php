<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => '24/7 Medical Care',
                'title_slug' => '24-7-medical-care',
                'description' => 'Round-the-clock medical supervision and emergency support for elderly residents.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
            [
                'title' => 'Assisted Living Support',
                'title_slug' => 'assisted-living-support',
                'description' => 'Daily assistance with personal care, mobility, and routine activities.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
            [
                'title' => 'Nutritious Meal Services',
                'title_slug' => 'nutritious-meal-services',
                'description' => 'Healthy, balanced meals prepared to meet senior dietary needs.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
            [
                'title' => 'Recreation & Wellness',
                'title_slug' => 'recreation-and-wellness',
                'description' => 'Engaging activities and wellness programs for mental and physical health.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
            [
                'title' => 'Physiotherapy Care',
                'title_slug' => 'physiotherapy-care',
                'description' => 'Professional physiotherapy services to improve mobility and strength.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
            [
                'title' => 'Safe & Comfortable Living',
                'title_slug' => 'safe-and-comfortable-living',
                'description' => 'Secure, clean, and comfortable accommodation designed for seniors.',
                'image_path' => 'default_service_img.jpg',
                'is_public' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
