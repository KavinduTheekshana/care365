<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sunil Perera',
                'position' => 'Bank Officer',
                'rating' => 5,
                'message' => 'Care 365 provides outstanding elderly care with professionalism and compassion. I feel confident knowing my loved one is in safe hands.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
            [
                'name' => 'Nimal Fernando',
                'position' => 'Business Manager',
                'rating' => 5,
                'message' => 'The environment at Care 365 is calm, clean, and caring. The staff treats every resident with respect and dignity.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
            [
                'name' => 'Ruwan Silva',
                'position' => 'Software Engineer',
                'rating' => 4,
                'message' => 'As someone who values organization and reliability, I am impressed with the services and care standards at Care 365.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
            [
                'name' => 'Mahesh Gunawardena',
                'position' => 'Government Officer',
                'rating' => 5,
                'message' => 'Care 365 offers a safe and comfortable environment for seniors. The caregivers are attentive and truly compassionate.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
            [
                'name' => 'Dinesh Jayawardena',
                'position' => 'Chartered Accountant',
                'rating' => 4,
                'message' => 'Transparency, safety, and quality care are clearly visible at Care 365. I highly recommend their elderly care services.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
            [
                'name' => 'Kasun Wijesinghe',
                'position' => 'Entrepreneur',
                'rating' => 5,
                'message' => 'Care 365 truly feels like a family. The dedication of the staff and the quality of care provided are exceptional.',
                'image_path' => 'default_testimonial_img.png',
                'is_public' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
