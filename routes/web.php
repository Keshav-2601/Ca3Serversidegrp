<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HotelPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/admin', [HomePageController::class,'showAdminPage']
// )->name('admin');

 route::delete('{destination_id}/delete',[HomePageController::class,'destroy'])->name('destroydestination');
// route::get('{destination_id}/edit',[HomePageController::class,'edit'])->name('editpage');
// //after editpage
// route::get('/editeddata',[HomePageController::class,'editdata'])->name('editdestination');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Everyone can view the homepage, whether they're logged in or not
Route::get('/homepage', [HomePageController::class, "index"])->name('homepage');
Route::get('/hotels/{destination_id}',[HotelPageController::class,'show'])->name('hotelshowpage');

// Only authenticated users can edit, update, or delete their profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
     Route::get('/admin', [HomePageController::class, 'showAdminPage'])->name('admin');
     Route::get('/', [HomePageController::class, 'index'])->name('Homepage');
    Route::get('/create-destination', [HomePageController::class, 'createDestination'])->name('homepage.createDestination');
    Route::post('/destination/store', [HomePageController::class, 'storeDestination'])->name('homepage.storeDestination');
    
});

require __DIR__.'/auth.php';
