<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorporatePartnerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BeOurRSLDriverOrInvestorController;

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
    // return view('pages.home');
    return view('pages.comingsoon');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('contacts', ContactController::class)->only('index');
    Route::resource('corporate-partners', CorporatePartnerController::class)->only('index');

    Route::resource('be-our-rls-driver-or-investor', BeOurRSLDriverOrInvestorController::class)->only('index');
});

require __DIR__.'/auth.php';

Route::controller(\App\Http\Controllers\Auth\OTPController::class)->group(function(){
    Route::post('/login/otp/generate', 'loginOtpGenerate')->name('otp.loginOtpGenerate');
    Route::get('/otp/verification/{user_id}/{email}/{password}', 'verification')->name('otp.verification');
});
Route::get('/reset-password/otp/verify/{token}/{email}/{password}', [\App\Http\Controllers\Auth\NewPasswordController::class, 'passwordResetOtpVerification'])
    ->name('reset-password.otp-verify');
Route::post('/reset-password/otp', [\App\Http\Controllers\Auth\NewPasswordController::class, 'OtpNotification'])->name('reset-password.otp');

Route::controller(Controller::class)->group(function(){
    Route::get('/home', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('aboutUs');
    Route::get('/fleets', 'fleets')->name('fleets');
    Route::get('/our-service', 'ourService')->name('our-service');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/be-our-driver-or-investor', 'beOurDriverOrInvestor')->name('be-our-driver-or-investor');
    Route::get('/be-our-corporate-partners', 'beOurCorporatePartner')->name('be-our-corporate-partners');
});
Route::resource('contacts', ContactController::class)->only('store');
Route::resource('corporate-partners', CorporatePartnerController::class)->only('store');

Route::resource('be-our-rls-driver-or-investor', BeOurRSLDriverOrInvestorController::class)->only('store');
