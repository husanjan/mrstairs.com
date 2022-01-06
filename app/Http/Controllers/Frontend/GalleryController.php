<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request, $id = 1)
    {
        $categories = GalleryCategory::all();
        $photos = Gallery::where('category_id', $id)->get();
    
        return view('frontend.home.gallery', compact('categories', 'photos'));
    }
}
