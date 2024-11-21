<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard',  [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('create-event', [EventController::class, 'create'])->name('create-event');
    Route::post('create-event', [EventController::class, 'store']);
    Route::delete('destroy-event/{eventId}', [EventController::class, 'destroy'])->name('destroy-event');


    Route::get('create-activity/{eventId}', [ActivityController::class, 'create'])->name('create-activity');
    Route::post('create-activity', [ActivityController::class, 'store'])->name('store-activity');
    Route::get('list-activity/{eventId}', [ActivityController::class, 'show'])->name('list-activity');
    Route::delete('destroy-activity/{activityId}', [ActivityController::class, 'destroy'])->name('destroy-activity');
    
    
    
    
});
Route::get('dunga-burro', function () { 
    return view('administrative.activitiesIndex');});




require __DIR__.'/auth.php';
