<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AnimalsController::class,'admin'] );
Route::middleware(['auth:sanctum', 'verified'])->get('/adminSpecies', [AnimalsController::class,'admin2'] );
Route::resource('/',AnimalsController::class);