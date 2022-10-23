<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LogInController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerTwo;
use App\Http\Controllers\RegistrationController;

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
    return view('home');
})->name('home');

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
Route::get('/contact', [ContactUsController::class, 'show'])->name('contact.us');

Route::post('/contact', [ContactUsController::class, 'submitted'])->name('contact.us');

//__log in route
Route::get('/login', [LogInController::class, 'login'])->name('log.in');

Route::post('/login', [LogInController::class, 'logInSubmit'])->name('log.in');

//__registration route
Route::get('/registration', [RegistrationController::class, 'register'])->name('registration');

Route::post('/registration', [RegistrationController::class, 'registerSubmit'])->name('registration');