<?php

use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class, 'index']);

Route::get('share-pin', [AppController::class, 'getPins']);
Route::post('share-pin', [AppController::class, 'sharePin']);
Route::delete('share-pin', [AppController::class, 'deletePin']);


//STARTED AT 1:17PM