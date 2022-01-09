<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;
use App\Models\GalleryItemCategory;
use App\Models\LinkGalleryCategory;

/**
 * Class GallerySeeder
 *
 * @package Database\Seeders
 */
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalleryItemCategory::factory(5)->create();
        GalleryItem::factory(20)->create();
        LinkGalleryCategory::factory(20)->create();
    }
}
