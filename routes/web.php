<?php

use App\Http\Controllers\LocalizationController;
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
});

Route::get('locale/{lang}', [LocalizationController::class, 'setLang']);

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/streams', function () {
    return view('streams');
});

Route::get('/profile', function () {
    return view('profile');
});


