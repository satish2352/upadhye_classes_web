<?php
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\ {
    User,
};
use Illuminate\Support\Facades\Storage;
function getPermissionForCRUDPresentOrNot($url,$data_for_session) {
    $data =[];
    if(session('role_id') =='1') {
        array_push($data,'per_add');
        array_push($data,'per_update');
        array_push($data,'per_delete');
    } else {
        foreach ($data_for_session as $value_new) {
        
            if($value_new['url'] == $url) {
                info($value_new);
                foreach ($value_new as $key => $value) {
                    info($value);
                    if($value == 1) {
                        array_push($data,$key);
                    }
                }
                return $data;
            }
        }
    }
    return $data;
}