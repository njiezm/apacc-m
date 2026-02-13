<?php

use Illuminate\Support\Facades\Route;

// Pages Principales
Route::get('/', function () { return view('pages.home'); })->name('home');
Route::get('/a-propos', function () { return view('pages.about'); })->name('about');
Route::get('/evenements', function () { return view('pages.events'); })->name('events');
Route::get('/artistes', function () { return view('pages.artists'); })->name('artists');
Route::get('/patrimoine', function () { return view('pages.heritage'); })->name('heritage');
Route::get('/ressources', function () { return view('pages.resources'); })->name('resources');
Route::get('/boutique', function () { return view('pages.shop'); })->name('shop');
Route::get('/contact', function () { return view('pages.contact'); })->name('contact');

// Pages Légales
Route::get('/mentions-legales', function () { return view('pages.legal'); })->name('legal');
Route::get('/politique-confidentialite', function () { return view('pages.privacy'); })->name('privacy');

// Route pour la liste des actualités (Accueil)
Route::get('/', function () { return view('pages.home'); })->name('home');

// Route pour voir un article précis
Route::get('/actualite/{slug}', function ($slug) {
    return view('pages.news-show', ['slug' => $slug]);
})->name('news.show');