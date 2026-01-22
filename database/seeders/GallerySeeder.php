<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            [
                'category_name' => 'Facility & Environment',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Resident Rooms',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Medical & Care Services',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Daily Activities',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Dining & Nutrition',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Recreation & Entertainment',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Safety & Security',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Staff & Caregivers',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Outdoor & Garden Areas',
                'image_path' => 'default_gallery_img.jpg',
            ],
            [
                'category_name' => 'Special Events',
                'image_path' => 'default_gallery_img.jpg',
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
