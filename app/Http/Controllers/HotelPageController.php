<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use App\Models\Hotels;
class HotelPageController extends Controller{
    public function show($destination_id){
       $hotels=Hotels::where('destination_id',$destination_id)->get();
       return view('hotelshow',['hotels'=>$hotels]);
    }
}