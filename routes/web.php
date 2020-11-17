<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SpecieController;
use App\Models\Animal;
use App\Models\Specie;
use App\Models\User;


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('animal',AnimalsController::class);
 });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('specie',SpecieController::class);
});
Route::get('/',function () {
          $species = Specie::with('animals') -> get();
         $animals = Animal::all();
        return view('welcome',['species'=> $species ,'animals'=> $animals ]);
})->name('welcome');