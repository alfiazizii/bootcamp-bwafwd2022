<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontSite\LandingController;
use App\Http\Controllers\FrontSite\Appointment;
use App\Http\Controllers\FrontSite\PaymentController;

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

Route::resource('/', LandingController::class);

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function() {

    // appointment page
    Route::resource('appointment', ApppointmentController::class);

    // payment page
    Route::resource('payment', PaymentController::class);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
