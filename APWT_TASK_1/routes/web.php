<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerTwo;

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

//__Home route
Route::get('/home', function () {
    return view('home');
})->name('home');

//__product route
Route::get('/products', [ProductControllerTwo::class, 'index'])->name('products');

//__our teams route
Route::get('/ourTeams', function () {
    return view('ourTeams');
})->name('our.teams');

//__about us route
Route::get('/about', function () {
    return view('about');
})->name('about.us');

//__contact us route
Route::get('/contact', function () {
    return view('contact');
})->name('contact.us');