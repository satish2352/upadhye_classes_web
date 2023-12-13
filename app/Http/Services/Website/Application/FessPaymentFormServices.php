<?php
namespace App\Http\Services\Website\Application;

use App\Http\Repository\Website\Application\FessPaymentFormRepository;

// use App\Marquee;
use Carbon\Carbon;


class FessPaymentFormServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new FessPaymentFormRepository();
    }
    public function getAllLocationAddress()
    {
        try {
            return $this->repo->getAllLocationAddress();
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function addFessPaymentForm($request){
        try {
            $last_id = $this->repo->addFessPaymentForm($request);
            if ($last_id) {
                return ['status' => 'success', 'msg' => 'Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    
     
}