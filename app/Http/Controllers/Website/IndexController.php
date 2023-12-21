<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    EducationClass,
    MarqueeTab

};

class IndexController extends Controller
{
    public function index()
    {
        try {
            return view('website.pages.index');
        } catch (\Exception $e) {
            return $e;
        }
    }

    static function getCommonFormData() {
        try {
            $retun_data = [];
            $data_output_location_address = LocationAddress::where('is_active', true)
            ->select(
                'location_address.name',
                'location_address.id',
            )
            ->get()
            ->toArray();

        $retun_data['data_output_location_address'] = $data_output_location_address;

            $data_output_all_board = EducationBoard::where('is_active', true)
                ->select(
                    'education_board.name',
                    'education_board.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_all_board'] = $data_output_all_board;
    
            $data_output_all_class = EducationClass::where('is_active', true)
                ->select(
                    'education_class.name',
                    'education_class.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_all_class'] = $data_output_all_class;

            
            $data_output_marquee_tab = MarqueeTab::where('is_active', true)
                ->select(
                    'marquee_tab.title',
                    'marquee_tab.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_marquee_tab'] = $data_output_marquee_tab;
            
            return $retun_data;
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error($e);
    
            // Return an error response
            return ['error' => 'An error occurred while fetching data. Please try again later.'];
        }
    }
    
}
