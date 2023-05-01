<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\ContactController;

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
    return view('homepage');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/car', function () {
    return view('car');
})->name('car');


Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');


Route::post('/contact-form', [ContactController::class, 'contact'])->middleware(ProtectAgainstSpam::class);