<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SoapController;
use App\Http\Controllers\XmlController;
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

Route::get('soap', [SoapController::class, 'index']);
Route::get('xml', [XmlController::class, 'index']);
Route::get('players', [PlayerController::class, 'index']);
