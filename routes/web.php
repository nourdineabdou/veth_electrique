<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('propos');
})->name('propos');

Route::get('/product', function () {
    return view('produits');
})->name('product');

Route::get('/partenaire', function () {
    return view('partennaire');
})->name('partenaire');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/devis', function () {
    return view('devis');
})->name('devis');