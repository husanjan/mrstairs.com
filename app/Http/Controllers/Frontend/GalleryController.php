<?php

namespace App\Http\Controllers\Frontend;

use App\Models\GalleryItem;
use App\Models\GalleryItemCategory;
use App\Http\Controllers\Controller;

/**
 * Class GalleryController
 *
 * @package App\Http\Controllers\Frontend
 */
class GalleryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = GalleryItemCategory::all();
        $galleryItems = GalleryItem::all();

        return view('frontend.gallery.index', compact('categories', 'galleryItems'));
    }
}
