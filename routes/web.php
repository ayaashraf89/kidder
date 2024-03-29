<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('classes', function () {
    return view('classes');
})->name('classes');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('call', function () {
    return view('call');
})->name('call');

Route::get('classes', function () {
    return view('classes');
})->name('classes');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('facilities', function () {
    return view('facility');
})->name('facility');


Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');



// Testimonials
Route::post('storeTestimonial', [TestimonialController::class, 'store'])->name('storeTestimonial'); 

Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::get('addTestimonial', [TestimonialController::class, 'create']);

// Appointments
Route::post('storeAppointment', [AppointmentController::class, 'store'])->name('storeAppointment'); 

Route::get('appointment', [AppointmentController::class, 'index'])->name('appointment');

Route::get('appointment', [AppointmentController::class, 'create']);