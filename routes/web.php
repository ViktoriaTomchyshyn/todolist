<?php

use App\Http\Controllers\SessionsController;
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

    return view('authorization');
})->middleware('guest');

Route::get('signup', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
Route::post('signup', [\App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/dashboard', function () {return view('dashboard');});

Route::get('/settings', function () {return view('settings');});

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
