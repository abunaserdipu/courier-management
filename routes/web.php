<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrackController;
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
    return view('dashboard');
});
Route::resource('order', OrderController::class);
// Route::get('/order', [OrderController::class, 'index']);
Route::get('/track', [TrackController::class, 'index']);
Route::get('/track-order', [TrackController::class, 'orderTrack']);
