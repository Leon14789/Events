<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




Route::get('/',  [HomeController::class, 'index'])->name('Home');
Route::get('list-activities-for-students/{eventId}', [HomeController::class, 'show'])->name('available-activities');
Route::get('activity-details-for-student/{activityId}', [HomeController::class, 'activityDetails'])->name('activity-details');

Route::get('register-student/{activityId}', [StudentController::class, 'create'])->name('register-student');
Route::post('register-student', [StudentController::class, 'store'])->name('store-student');





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
    Route::get('list-activities/{eventId}', [ActivityController::class, 'index'])->name('list-activities');
    Route::get('activity/{activityId}', [ActivityController::class, 'show'])->name('activity');
    Route::delete('destroy-activity/{activityId}', [ActivityController::class, 'destroy'])->name('destroy-activity');
    
    Route::delete('destroy-student/{studentId}', [StudentController::class, 'destroy'])->name('destroy-student');

    Route::post('/end-event/{eventId}', [EventController::class, 'update'])->name('end.event');
    Route::post('/resume-event/{eventId}', [EventController::class, 'resume'])->name('resume.event');
    
    Route::post('roll-call/{activityId}', [PdfController::class, 'storeRollCall'])->name('roll-call');
    Route::post('generate-certificate/{studentId}', [PdfController::class, 'storeCertificate'])->name('Certificate');
    
});

Route::get('dunga-burro', function() {
    return view('Pdf.teste');
});



require __DIR__.'/auth.php';
