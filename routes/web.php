<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HotelPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::delete('{destination_id}/delete',[HomePageController::class,'destroy'])->name('destroydestination');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', [HomePageController::class, 'showAdminPage'])->name('admin');

// Everyone can view the homepage, whether they're logged in or not
Route::get('/homepage', [HomePageController::class, "index"])->name('homepage');
Route::get('/hotels/{destination_id}',[HotelPageController::class,'show'])->name('hotelshowpage');

// Only authenticated users can edit, update, or delete their profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::get('/', [HomePageController::class, 'index'])->name('Homepage');    
});
Route::get('/destinations/{id}/edit', [HomePageController::class, 'editDestination'])->name('homepage.editDestination');

 Route::get('/create-destination', [HomePageController::class, 'createDestination'])->name('homepage.createDestination');
 Route::post('/destination/store', [HomePageController::class, 'storeDestination'])->name('homepage.storeDestination');
 Route::get('/destinations/{id}/edit', [HomePageController::class, 'editDestination'])->name('homepage.editDestination'); 
 Route::get('/destinations/{id}/show',[HomePageController::class,'showDestination']) ->name('homepage.showDestination');  
 Route::delete('/destinations/{id}', [HomePageController::class, 'destroyDestination'])->name('destination.delete');
 Route::get('/admin', [HomePageController::class, 'showAdminPage'])->name('adminhomepage');
 Route::put('/destinations/{id}', [HomePageController::class, 'updateDestination'])->name('destination.update');
 Route::get('/destinations/{id}/edit', [HomePageController::class, 'editDestination'])->name('destination.edit');
 Route::put('/destinations/{id}', [HomePageController::class, 'updateDestination'])->name('destination.update');
   
    Route::get('/destinations/{id}/edit', [HomePageController::class, 'editDestination'])->name('destination.edit');
    
    Route::get('/destinations/{id}/edit', [HomePageController::class, 'editDestination'])->name('homepage.editDestination');
   

require __DIR__.'/auth.php';
