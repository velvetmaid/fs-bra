<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SlideshowController;
use Illuminate\Support\Facades\Auth;
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

/* Main Page */

Route::get('/', 'PropertiesController@index');

Route::get('/contact-us', function () {
    return view('contact-us', [
        "title" => "Contact Us"
    ]);
});

Route::get('/about-us', function () {
    return view('about-us', [
        "title" => "About"
    ]);
});
/* End Main Page */


/* Control Page */

Route::get('/dashboard', function () {
    return view('controls.admins.dashboard', [
        "title" => "Dashboard"
    ]);
});


Route::get('/index-accounts', function () {
    return view('controls.operator.accounts', [
        "title" => "Index Accounts"
    ]);
});

Route::get('/index-properties', function () {
    return view('controls.admins.index-properties', [
        "title" => "Index Properties"
    ]);
});

Route::get('/add-properties', function () {
    return view('controls.admins.add-properties');
});
/* End Control Page */

/* Index Auth */
Route::get('control-admin', function () {
    return view('auth.login');
});
/* End Index Auth */

Auth::routes();
Route::get('/redirects', [HomeController::class, 'rolesauth']);

/* Index Home Web */
Route::get('/', [PropertiesController::class, 'properties'])->name('properties');
/* Index Control */
Route::get('/index-properties', [PropertiesController::class, 'indexProperties'])->name('indexProperties');
Route::get('/update-properties/{id}', [PropertiesController::class, 'updateProperties'])->name('updateProperties');
Route::post('/add-properties', [PropertiesController::class, 'addProperties'])->name('addProperties');
Route::post('/update-data-properties/{id}', [PropertiesController::class, 'updateDataProperties'])->name('updateDataProperties');
Route::delete('/properties/{id}', [PropertiesController::class, 'destroyProperties'])->name('destroyProperties');

Route::resource('/reservation', ReservationController::class);
Route::post('captcha-validation', [ReservationController::class, 'store']);
Route::get('reload-captcha', [ReservationController::class, 'reloadCaptcha']);

Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::get('/about-us', [AboutController::class, 'indexAbout'])->name('indexAbout');
Route::get('/contact-us', [ContactController::class, 'indexContact'])->name('indexContact');
Route::resource('slideshow', SlideshowController::class);
