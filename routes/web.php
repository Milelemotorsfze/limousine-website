<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('pages.home');
});
Route::controller(Controller::class)->group(function(){
    Route::get('/home', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('aboutUs');
    Route::get('/fleets', 'fleet')->name('fleets');
});