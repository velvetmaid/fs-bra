<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;

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

Route::get('/contactus', function () {
    return view('contactus', [
        "title" => "Contact Us"
    ]);
});

/* End Main Page */


/* Admin Page */

Route::get('/control-admin', function () {
    return view('home', [
        "title" => "Login"
    ]);
});

Route::get('/addproperties', function () {
    return view('admins/add-properties', [
        "title" => "Add Properties"
    ]);
});

Route::get('/', 'PropertiesController@index');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/add-properties', [PropertiesController::class, 'addproperties'])->name('addproperties');
Route::get('/', [PropertiesController::class, 'properties'])->name('properties');
