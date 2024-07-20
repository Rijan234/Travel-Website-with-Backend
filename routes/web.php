<?php

use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Frontend\FrontendController as FrontendFrontendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home');
// })->name('home');

Route::get('/', [FrontendFrontendController::class, 'home'])->name('fe.home');
Route::get('/hotels', [FrontendFrontendController::class, 'hotel'])->name('fe.hotel');
Route::get('/hotels/{id}', [FrontendFrontendController::class, 'hotelpost'])->name('fe.hotelpost');
Route::get('/destinations', [FrontendFrontendController::class, 'destination'])->name('fe.destination');
Route::get('/destinations/{id}', [FrontendFrontendController::class, 'destinationpost'])->name('fe.destinationpost');
Route::get('/about', [FrontendFrontendController::class, 'about'])->name('fe.about');



Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/add', function () {
        return view('backend.add');
    })->name('add');

    Route::resource('hotel', HotelController::class)->names('hotel');
    Route::resource('destination', DestinationController::class)->names('destination');
});

require __DIR__ . '/auth.php';
