<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ParkingSpot;

class ParkingSpotController extends Controller
{
    public function index(){
    	$parkingSpots = ParkingSpot::all();
    	return $parkingSpots;
    }

}
