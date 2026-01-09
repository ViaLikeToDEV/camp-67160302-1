<?php

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
    return view('html101');
})->name('home');

Route::get('/2', function () {
    return view('html102');
});

Route::get('/myFunc', [App\Http\Controllers\MyController::class, 'myFunc']);
Route::get('/Another', [App\Http\Controllers\MyController::class, 'anotherFunc']);
Route::get('/info', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
Route::post('/save-user', [App\Http\Controllers\MyController::class, 'store']);

Route::post('/form-workshop', [App\Http\Controllers\FormWorkShopController::class, 'store']); //workshop form 1

Route::resource('/flights', App\Http\Controllers\FlightController::class);
Route::resource('/pokedexs', App\Http\Controllers\pokedexsController::class);
