<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\CardsList;
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

Route::get('signup', [RegisterController::class, 'create'])->middleware('guest');

Route::post('signup', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'CardsLists' => auth()->user()->cardsLists
    ]);
})->middleware('auth');

Route::get('/dashboard/{cardsList}', function ($title){
   $list = CardsList::find($title);
   if($list)
    return view('cardsList', [
        'cards'=>$list->cards,
        'list'=>$list
    ]);
   return redirect('/dashboard');
})->middleware('auth');

Route::get('/settings', function () {return view('settings');});

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/cards', [CardController::class, 'store'])->middleware('auth');

Route::post('/lists', [ListController::class, 'store'])->middleware('auth');

Route::delete('/cards/{card}', [CardController::class, 'destroy'])->middleware('auth');

Route::delete('/lists/{list}', [ListController::class, 'destroy'])->middleware('auth');
