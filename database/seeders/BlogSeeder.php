<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create categories with descriptions
        $categories = [
            [
                'name'        => 'Health & Wellness',
                'slug'        => 'health-wellness',
                'description' => 'Articles and guides focused on physical health, fitness routines, exercise recommendations, preventive care, and overall wellness strategies specifically tailored for seniors and elderly individuals.',
                'is_active'   => true,
            ],
            [
                'name'        => 'Daily Living Tips',
                'slug'        => 'daily-living-tips',
                'description' => 'Practical everyday advice including home safety modifications, mobility aids, personal hygiene routines, fall prevention, and tips for comfortable and independent living in retirement or assisted environments.',
                'is_active'   => true,
            ],
            [
                'name'        => 'Mental Health',
                'slug'        => 'mental-health',
                'description' => 'Resources and insights on emotional well-being, managing loneliness, cognitive stimulation exercises, stress reduction techniques, memory support, and maintaining mental sharpness during later life stages.',
                'is_active'   => true,
            ],
            [
                'name'        => 'Nutrition',
                'slug'        => 'nutrition',
                'description' => 'Healthy eating guides, balanced meal planning, special dietary considerations (diabetic-friendly, low-sodium, soft-food options), nutrient-rich recipes, hydration tips, and nutrition advice optimized for older adults.',
                'is_active'   => true,
            ],
        ];

        $createdCategories = [];
        foreach ($categories as $cat) {
            $category = Category::firstOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
            $createdCategories[$cat['slug']] = $category;
        }

        // 2. Create tags
        $tagsData = [
            ['name' => 'senior health',       'slug' => 'senior-health'],
            ['name' => 'elderly care',        'slug' => 'elderly-care'],
            ['name' => 'mental wellness',     'slug' => 'mental-wellness'],
            ['name' => 'nutrition',           'slug' => 'nutrition'],
            ['name' => 'daily routine',       'slug' => 'daily-routine'],
            ['name' => 'home safety',         'slug' => 'home-safety'],
            ['name' => 'technology',          'slug' => 'technology'],
            ['name' => 'activities',          'slug' => 'activities'],
            ['name' => 'fitness',             'slug' => 'fitness'],
            ['name' => 'emotional health',    'slug' => 'emotional-health'],
        ];

        $tags = [];
        foreach ($tagsData as $tagData) {
            $tag = Tag::firstOrCreate(
                ['slug' => $tagData['slug']],
                $tagData + ['is_active' => true]
            );
            $tags[] = $tag;
        }

        // 3. Create 6 blogs with slugs auto-generated from title
        $blogs = [
            [
                'title'            => 'Benefits of Assisted Living for Seniors',
                'name'             => 'Kamal Disanayake',
                'date'             => '2026-01-15',
                'description'      => 'Discover how assisted living improves seniors’ quality of life by providing daily support, medical care, and social engagement in a safe and friendly environment.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Assisted Living Benefits for Seniors | Care365',
                'meta_description' => 'Learn how assisted living helps seniors maintain independence with professional care and community support.',
                'meta_keywords'    => 'assisted living, senior care, elderly support',
                'category_slug'    => 'health-wellness',
            ],

            [
                'title'            => 'How Nutrition Impacts Senior Health',
                'name'             => 'Nirmala Fernando',
                'date'             => '2026-01-16',
                'description'      => 'A healthy diet is vital for seniors. Learn about the key nutrients that support mobility, immunity, and overall well-being in elderly care.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Nutrition Guide for Seniors – Care365',
                'meta_description' => 'Explore how proper nutrition can improve energy, strength, and quality of life for older adults.',
                'meta_keywords'    => 'senior nutrition, elderly diet, healthy aging',
                'category_slug'    => 'nutrition',
            ],

            [
                'title'            => 'Importance of Mental Wellness in Retirement',
                'name'             => 'Sunil Perera',
                'date'             => '2026-01-17',
                'description'      => 'Maintaining emotional and mental well-being is essential for seniors. Explore activities and programs that foster social interaction and happiness.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Mental Health Tips for Retirees | Care365',
                'meta_description' => 'Discover ways to stay mentally active and emotionally balanced during retirement years.',
                'meta_keywords'    => 'mental wellness, senior mental health, retirement happiness',
                'category_slug'    => 'mental-health',
            ],

            [
                'title'            => 'Tips for a Safe and Comfortable Elderly Home',
                'name'             => 'Lakshmi Silva',
                'date'             => '2026-01-18',
                'description'      => 'Simple adjustments at home can improve safety and comfort for elderly residents. Here are practical tips for creating a secure and supportive environment.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Home Safety Tips for Seniors – Care365',
                'meta_description' => 'Practical home modifications and safety ideas for elderly living spaces.',
                'meta_keywords'    => 'elderly home safety, senior living tips, accessible home',
                'category_slug'    => 'daily-living-tips',
            ],

            [
                'title'            => 'The Role of Technology in Modern Elderly Care',
                'name'             => 'W. K. Jayasinghe',
                'date'             => '2026-01-19',
                'description'      => 'From health monitoring systems to communication tools, discover how technology enhances care, safety, and connection for seniors.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Technology in Elderly Care | Care365 Insights',
                'meta_description' => 'How modern tech improves safety, health monitoring, and social connection for seniors.',
                'meta_keywords'    => 'elderly care technology, senior health tech, smart home',
                'category_slug'    => 'health-wellness',
            ],

            [
                'title'            => 'Healthy Daily Routine for Elderly People',
                'name'             => 'Anusha Wijeratne',
                'date'             => '2026-01-20',
                'description'      => 'A structured daily routine helps seniors stay physically active, mentally sharp, and emotionally balanced. Learn simple habits for a healthier retirement.',
                'image_path'       => 'default_blog_image.jpg',
                'is_public'        => true,
                'meta_title'       => 'Healthy Daily Routine for Elderly People – Care365',
                'meta_description' => 'Simple and effective daily habits to promote health, mobility, and happiness for seniors.',
                'meta_keywords'    => 'daily routine, elderly health, senior lifestyle, retirement habits',
                'category_slug'    => 'daily-living-tips',
            ],
        ];

        foreach ($blogs as $blogData) {
            $blog = Blog::updateOrCreate(
                ['title' => $blogData['title']],
                [
                    'name'             => $blogData['name'],
                    'date'             => $blogData['date'],
                    'description'      => $blogData['description'],
                    'image_path'       => $blogData['image_path'],
                    'is_public'        => $blogData['is_public'],
                    'title_slug'       => Str::slug($blogData['title']),
                    'meta_title'       => $blogData['meta_title'],
                    'meta_description' => $blogData['meta_description'],
                    'meta_keywords'    => $blogData['meta_keywords'],
                    'category_id'      => $createdCategories[$blogData['category_slug']]->id ?? null,
                ]
            );

            // Attach 2–4 random tags
            $randomTags = collect($tags)->random(rand(2, 4))->pluck('id')->toArray();
            $blog->tags()->sync($randomTags);
        }

        $this->command->info('6 blogs seeded with categories (including descriptions), tags, and proper slugs!');
    }
}