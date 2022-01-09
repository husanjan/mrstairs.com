<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;
use App\Models\GalleryItemCategory;
use App\Models\LinkGalleryCategory;
use Illuminate\Support\Facades\DB;

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
        // GalleryItemCategory::factory(5)->create();
        // GalleryItem::factory(20)->create();
        // LinkGalleryCategory::factory(20)->create();

        $this->createCategory();
    }

    public function createCategory()
    {
        $datas = ['oak', 'cut string', 'pine', 'Quarter turn', 'Half turn'];
        
        foreach ($datas as $data) {
            GalleryItemCategory::create([
                'name' => $data
            ]);
        }
        
    }
}
