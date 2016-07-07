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
         	$now = new DateTime();
			$now->format('Y-m-d H:i:s');   
            


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
		        $startTime =  $now->getTimestamp(); 


		        DB::table('ParkingSpot')->where('licensePlate', NULL)->update(array(
		            'licensePlate' => $licensePlate,
		            'startTime' => $startTime
		        ));

    		}


        } 
}
