<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
/*
Route::resource('chirps', LoginController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);
*/


    

require __DIR__.'/auth.php';
