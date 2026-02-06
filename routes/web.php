<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/fonctionnalites', function () {
    return view('frontend.features');
})->name('features');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/tarifs', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/a-propos', function () {
    return view('frontend.about');
})->name('about');

Route::get('/vision-mission', function () {
    return view('frontend.vision');
})->name('vision');

Route::get('/articles', function () {
    return view('frontend.articles');
})->name('articles');

Route::get('/equipe', function () {
    return view('frontend.team');
})->name('team');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/conditions-utilisation', function () {
    return view('frontend.terms');
})->name('terms');

Route::get('/politique-confidentialite', function () {
    return view('frontend.privacyPolicy');
})->name('privacy');
