<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear table
        Gallery::truncate();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $galleries = [
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123091522_NOqzvmz2.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123091535_3959v8Yo.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123091550_KugPtRXa.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123091609_hPtAZw3i.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123091624_qS3RwnCA.jpg'],

            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091645_UQXH5Z5n.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091714_8xeNAp1M.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091729_6YLCu4Km.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091753_DklKvHX1.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091807_ekksaDps.jpg'],

            ['category_name' => 'Special Events', 'image_path' => 'gallery_20260123091833_Bi4el9L2.jpg'],
            ['category_name' => 'Special Events', 'image_path' => 'gallery_20260123091848_pGN7VmCa.jpg'],

            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091915_jIx4vZmk.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091929_yBTWAEKe.jpg'],
            ['category_name' => 'Rooms', 'image_path' => 'gallery_20260123091945_DI7cf5RS.jpg'],

            ['category_name' => 'Dinning & Nutrition', 'image_path' => 'gallery_20260123092015_h4PkMuTE.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123092048_lQgcAqd1.jpg'],
            ['category_name' => 'Dinning & Nutrition', 'image_path' => 'gallery_20260123092059_tvAncKUR.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123092126_PZcKFDCC.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123092137_PbZtVxRj.jpg'],
            ['category_name' => 'Facility & Environment', 'image_path' => 'gallery_20260123092155_Ume3yyEp.jpg'],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }

        $this->command->info('✅ Gallery table seeded successfully!');
    }
}
