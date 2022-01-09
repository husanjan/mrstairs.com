<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class GalleryItemCategory
 *
 * @package App\Models
 */
class GalleryItemCategory extends Model
{
    use HasFactory;

    /**
     * Get all gallery items of the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function galleries()
    {
        return $this->belongsToMany(GalleryItem::class, 'link_gallery_categories');
    }
}
