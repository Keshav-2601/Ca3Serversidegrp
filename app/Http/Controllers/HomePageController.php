<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller{
    public function index(){
        $destination=Destination::with('images')->get();
        return view('Homepage',['destinations'=>$destination]);
    }
}