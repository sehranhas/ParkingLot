<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ParkingSpot;
use Input;
use DateTime;
use DB;
use Redirect;
use Validator;

class addCarController extends Controller
{
    public function update()
         {
         	   

            $validation = Validator::make(Input::all(), 
		        array(
		            'licensePlate' => 'required',
		            'size' => 'required',
		        )
		    ); 

		    if($validation->fails()) {
		        return Redirect::back()->withInput()->withErrors($validation->messages());
		    } else {


		        $licensePlate = Input::get('licensePlate');
		        $size = Input::get('size');
		        $startTime =  date('Y-m-d H:i:s');

		        $spot_ids =  DB::table('ParkingSpot')
                     ->select('id')
                     ->whereNull('licensePlate')
                     ->where('size', $size)
                     ->get();
                    
                if($spot_ids != []){
                	$id = (object) $spot_ids[0];
                	
                	DB::table('ParkingSpot')->where('id', $id->id)->update(array(
			            'licensePlate' => $licensePlate,
			            'startTime' => $startTime
		        	));
                }
                else {
                	echo "Sorry, no spots available";
                }
               
    		}


        } 
}
