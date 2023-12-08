<?php

namespace App\Http\Controllers\Website\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function getGallery()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.gallery.gallery');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
