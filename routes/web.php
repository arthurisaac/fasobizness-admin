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
    return view('statistiques.dashboard');
});

Route::resource('/annonces', \App\Http\Controllers\AnnonceController::class);
Route::get('/offres-en-or', [\App\Http\Controllers\AnnonceController::class, 'offresEnOr']);

Route::resource('/suggestions', \App\Http\Controllers\SuggestionController::class);
Route::resource('/signalement', \App\Http\Controllers\SignalerController::class);

Route::resource('/pubs', \App\Http\Controllers\PubController::class);
Route::resource('/personnes', \App\Http\Controllers\PersonneController::class);
