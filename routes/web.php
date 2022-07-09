<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', 'PropertiesController@index');

Route::get('/contactus', function () {
    return view('contactus', [
        "title" => "Contact Us"
    ]);
});

/* End Main Page */


/* Control Page */

Route::get('/index-properties', function () {
    return view('controls/admins/index-properties', [
        "title" => "Index Properties"
    ]);
});

Route::get('/add-properties', function () {
    return view('admins/add-properties', [
        "title" => "Add Properties"
    ]);
});

/* End Control Page */

/* Index Auth */

Route::get('/control-admin', function () {
    return view('auth/login', [
        "title" => "Login"
    ]);
});

/* End Index Auth */

Route::get('/redirects', [HomeController::class, 'authentic']);

/* Index Home Web */
Route::get('/', [PropertiesController::class, 'properties'])->name('properties');
/* Index Control */
Route::get('/index-properties', [PropertiesController::class, 'indexproperties'])->name('indexproperties');
Route::post('/add-properties', [PropertiesController::class, 'addproperties'])->name('addproperties');

