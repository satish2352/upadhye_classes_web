<?php
namespace App\Http\Repository\Admin\Home;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	Testimonial
};
use Config;

class TestimonialRepository  {
	public function getAll(){
        try {
            return Testimonial::all();
        } catch (\Exception $e) {
            return $e;
        }
    }

	public function addAll($request){
    
        try {
            $data =array();
           
            $slides = new Testimonial();
            $slides->titile = $request['titile'];
            $slides->description = $request['description'];
            $slides->position = $request['position'];
            $slides->save(); 
            $last_insert_id = $slides->id;
            dd($last_insert_id);
            die();

            $ImageName = $last_insert_id .'_' . rand(100000, 999999) . '_image.' . $request->image->extension();
            
            $slide = Testimonial::find($last_insert_id); // Assuming $request directly contains the ID
            $slide->image = $ImageName; // Save the image filename to the database
            $slide->save();
            $data['ImageName'] =$ImageName;


            
            return $data;
           
        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }

    public function getById($id){
        try {
            $slider = Testimonial::find($id);
            if ($slider) {
                return $slider;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id slide.',
                'status' => 'error'
            ];
        }
    }
    
    public function updateAll($request){
        try {
            $return_data = array();
            $slide_data = Testimonial::find($request->id);

            if (!$slide_data) {
                return [
                    'msg' => 'Report Incident Crowdsourcing not found.',
                    'status' => 'error'
                ];
            }

            // Store the previous image names
            $previousEnglishImage = $slide_data->image;

            // Update the fields from the request
            $slide_data->titile = $request['titile'];
            $slide_data->description = $request['description'];
            $slides->position = $request['position'];
            $slide_data->save();
            $last_insert_id = $slide_data->id;

            $return_data['last_insert_id'] = $last_insert_id;
            $return_data['image'] = $previousEnglishImage;
            return  $return_data;
        
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update Report Incident Crowdsourcing.',
                'status' => 'error',
                'error' => $e->getMessage() // Return the error message for debugging purposes
            ];
        }
    }

    public function updateOne($request){
        try {
            $slide = Testimonial::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the Slider model
            if ($slide) {
                $is_active = $slide->is_active === 1 ? 0 : 1;
                $slide->is_active = $is_active;
                $slide->save();

                return [
                    'msg' => 'Slide updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Slide not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update slide.',
                'status' => 'error'
            ];
        }
    }

    public function deleteById($id){
            try {
                $slider = Testimonial::find($id);
                if ($slider) {
                    if (file_exists_s3(Config::get('DocumentConstant.SLIDER_DELETE') . $slider->image)){
                        removeImage(Config::get('DocumentConstant.SLIDER_DELETE') . $slider->image);
                    }
                    $slider->delete();
                    
                    return $slider;
                } else {
                    return null;
                }
            } catch (\Exception $e) {
                return $e;
            }
    }


}