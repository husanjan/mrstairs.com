<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class GalleryItem
 *
 * @package App\Models
 */
class GalleryItem extends Model
{
    use HasFactory;

    const TYPE_IMAGE = 0;
    const TYPE_VIDEO = 1;

    /**
     * Gets list of all categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(GalleryItemCategory::class, 'link_gallery_categories');
    }

    /**
     * @return mixed
     */
    public function categoryIds()
    {
        return $this->categories->pluck('id')->toArray();
    }
}
