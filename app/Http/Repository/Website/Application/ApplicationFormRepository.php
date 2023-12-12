<?php
namespace App\Http\Repository\Website\Application;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    ApplicationForm

};

class ApplicationFormRepository  {
    public function getAllLocationAddress() {
    try {
        $locationaddress = LocationAddress::where('is_active', '=', true);
        $data_output_location_address = $locationaddress->select('id', 'name')->get()->toArray();
        return [
            'data_output_location_address' => $data_output_location_address
        ];
    } catch (\Exception $e) {
        return $e;
    }
  }

  public function getAllBoard() {
    try {
        $educationboard = EducationBoard::where('is_active', '=', true);
        
        $data_output_all_board = $educationboard->select('id', 'name')->get()->toArray();

        return [
            'data_output_all_board' => $data_output_all_board
        ];
    } catch (\Exception $e) {
        return $e;
    }
}

  public function addApplicatioform($request)
  {
   
      try {
          $modal_data = new ApplicationForm();
          $modal_data->full_name = $request['full_name'];
          $modal_data->email = $request['email'];
          $modal_data->mobile_number = $request['mobile_number'];
          $modal_data->alternative_mobile_number = $request['alternative_mobile_number'];
          $modal_data->edu_location_id = $request['edu_location_id'];
          $modal_data->edu_board_id = $request['edu_board_id'];
          $modal_data->edu_class_id = $request['edu_class_id'];
          $modal_data->edu_course_id = $request['edu_course_id'];
          $modal_data->address = $request['address'];  
          $modal_data->save();
          // dd($modal_data);
          $last_insert_id = $modal_data->id;
          $modal_data = ApplicationForm::find($last_insert_id); // Assuming $request directly contains the ID
          $modal_data->save();
        
          return $last_insert_id;
      } catch (\Exception $e) {
          return [
              'msg' => $e->getMessage(),
              'status' => 'error'
          ];
      }
  }
  
}