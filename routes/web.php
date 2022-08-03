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

Route::get('/', 'PropertiesController@index');

Route::get('/contact-us', function () {
    return view('contact-us', [
        "title" => "Contact Us"
    ]);
});
/* End Main Page */


/* Control Page */
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
Route::get('/index-properties', [PropertiesController::class, 'indexproperties'])->name('indexproperties');
Route::get('/update-properties/{id}', [PropertiesController::class, 'updateproperties'])->name('updateproperties');
Route::post('/add-properties', [PropertiesController::class, 'addProperties'])->name('addProperties');
Route::post('/update-data-properties/{id}', [PropertiesController::class, 'updatedataproperties'])->name('updatedataproperties');
Route::delete('/properties/{id}', [PropertiesController::class, 'destroyproperties']);