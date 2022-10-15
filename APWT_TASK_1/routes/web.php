<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'this is route test';
});

//Home route
Route::get('/home', function () {
    return view('home');
})->name('home');

//product route
Route::get('/product', function () {
    return view('products');
})->name('products');

//our teams route
Route::get('/ourTeams', function () {
    return view('ourTeams');
})->name('our.teams');

//about us route
Route::get('/about', function () {
    return view('about');
})->name('about.us');

//contact us route
Route::get('/contact', function () {
    return view('contact');
})->name('contact.us');