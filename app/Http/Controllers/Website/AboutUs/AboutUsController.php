<?php

namespace App\Http\Controllers\Website\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.aboutus.updadhyeclasses');

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getDirectordesk()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.aboutus.directordesk');

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getTeachingmethodology()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.aboutus.teachingmethodology');

        } catch (\Exception $e) {
            return $e;
        }
    }
    
}

