<?php

namespace App\Http\Controllers\Website\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getCrashcoursebatch()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.courses.crashcoursebatch');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
