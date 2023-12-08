<?php

namespace App\Http\Controllers\Website\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function getApplicatioform()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.application.applicatioform');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getScolarship()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.application.scolarship');

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getFeespayment()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.application.feespayment');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
