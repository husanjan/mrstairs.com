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
    public $images = [
        'Oak' => [
            "https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.08.08-min.jpg",
        ],
        'Cut string' => [
            "https://www.mrstairs.com/wp-content/uploads/2018/12/Pars-Joinery-Staircase-min.jpg",
        ],
        'Pine' => [],
        'Quarter turn' => [],
        'Straight staircase' => [],
        'Half turn' => [],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->images as $key => $images) {
            $category = GalleryItemCategory::where('name', $key)->first();
            if (empty($category)) {
                $category = GalleryItemCategory::create(['name' => $key]);
            }

            foreach ($images as $image) {
                $galleryItem = GalleryItem::where('type', GalleryItem::TYPE_IMAGE)
                    ->where('path', $image)
                    ->first();

                if (empty($galleryItem)) {
                    $galleryItem = GalleryItem::create([
                        'type' => GalleryItem::TYPE_IMAGE,
                        'path' => $image,
                    ]);
                }

                if (empty($category) || empty($galleryItem)) {
                    continue;
                }

                $link = LinkGalleryCategory::where('gallery_item_id', $galleryItem->id)
                    ->where('gallery_item_category_id', $category->id)
                    ->first();

                if (!empty($link)) {
                    continue;
                }

                LinkGalleryCategory::create([
                    'gallery_item_id' => $galleryItem->id,
                    'gallery_item_category_id' => $category->id,
                ]);
            }
        }
    }
}
