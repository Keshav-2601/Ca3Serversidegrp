<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller{
    public function index(){
        $destinations=Destination::with('images')->get();
        return view('Homepage','adminhomepage',['destinations'=>$destinations]);

    }
    public function showAdminPage(){
        $destinations=Destination::with('images')->get();
        return view('adminhomepage', ['destinations'=>$destinations]);
    }
}