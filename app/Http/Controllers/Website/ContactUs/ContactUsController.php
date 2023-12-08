<?php

namespace App\Http\Controllers\Website\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getContactUs()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.contactus.contactus');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
