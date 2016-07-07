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
use View;

class ParkingSpotController extends Controller
{
    public function update() {
         	   

            $validation = Validator::make(Input::all(), 
		        array(
		            'licensePlate' => 'required',
		            'size' => 'required',
		        )
		    ); 

		    if($validation->fails()) {
		        return Redirect::back()->withInput()->withErrors($validation->messages());
		    } 
        else {

		    	$spots = array(1 => 'S', 2 => 'M', 3 => 'L', 4 => 'SS');
		        $licensePlate = Input::get('licensePlate');
		        $size = Input::get('size');
		        $startTime =  date('Y-m-d H:i:s');
		        $spot = $spots[$size];

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

		        	$spot = $spot . $id->id;
		        	return View::make('pages.success', array('spot' => $spot));
                }
                else {
                	return View::make('pages.noSpots');
                }
               
    		}

    }


    public function destroy() {
    	$validation = Validator::make(Input::all(), 
		        array(
		            'licensePlate' => 'required'
		        )
		);
		if($validation->fails()) {
		        return Redirect::back()->withInput()->withErrors($validation->messages());
		    } 
    else {
		    $licensePlate = Input::get('licensePlate');

		    $now = new DateTime();
		    
		    $data = DB::table('ParkingSpot')
                     ->select('id', 'startTime')
                     ->where('licensePlate', $licensePlate)
                     ->get();
            
        if($data != []){
            $data = (object) $data[0];
            $id = $data->id;
            $startTime = $data->startTime;
            	
            $startTime = new DateTime($startTime);
				    $diff = $startTime->diff($now);
				    $diff_seconds = (int) $diff->format("%s");
       			$diff_mins = (int) $diff->format("%i");
       			$diff_hours = (int) $diff->format("%h");
       			$diff_days = (int) $diff->format("%d");

       			$total_pay = ceil($diff_seconds/60)*2 + ((int) ($diff_mins/30))*2 + (($diff_hours * 60)/30)*2;

       			if($total_pay > 15){
       				$total_pay = 15;
       			}

       			if($diff_days > 0){
       				$total_pay += $diff_days * 15;
       			}

            	DB::table('ParkingSpot')->where('id', $id)->update(array(
			            'licensePlate' => NULL,
			            'startTime' => NULL
		        ));
		        return View::make('pages.removeSuccess', array('total_pay' => $total_pay, 'diff_seconds' => $diff_seconds, 'diff_mins' => $diff_mins, 
		        	'diff_hours' => $diff_hours, 'diff_days' => $diff_days));
            }
            else {
            	return View::make('pages.noCar');
            }
		  }
    } 
}
