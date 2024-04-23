<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HotelPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

Route::get('/', function () {
    return view('auth.login');
});

// Everyone can view the homepage, whether they're logged in or not
Route::get('/homepage', [HomePageController::class, "index"])->name('homepage');
Route::get('/hotels/{destination_id}',[HotelPageController::class,'show'])->name('hotelshowpage');

// Only authenticated users can edit, update, or delete their profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
