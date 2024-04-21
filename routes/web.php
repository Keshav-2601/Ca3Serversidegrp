<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[HomePageController::class,'index'])->name('homepageroute');
