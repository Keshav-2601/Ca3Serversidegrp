<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller{
    public function index(){
        $destination=DB::table('destination')->get();

        return view('Homepage',['destinations'=>$destination]);
    }
}