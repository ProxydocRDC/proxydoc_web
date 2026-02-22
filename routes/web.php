<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackActionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/fonctionnalites', function () {
    return view('frontend.features');
})->name('features');
Route::get('/faq', FaqController::class)->name('faq');

Route::get('/tarifs', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/a-propos', AboutController::class)->name('about');

Route::get('/vision-mission', function () {
    return view('frontend.vision');
})->name('vision');

Route::get('/articles', function () {
    return view('frontend.articles');
})->name('articles');

Route::get('/equipe', function () {
    return view('frontend.team');
})->name('team');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/support', [ContactController::class, 'index'])->name('support');

Route::get('/conditions-utilisation', function () {
    return view('frontend.terms');
})->name('terms');

Route::get('/politique-confidentialite', function () {
    return view('frontend.privacyPolicy');
})->name('privacy');

Route::post('/track-action', TrackActionController::class)->name('track.action');
