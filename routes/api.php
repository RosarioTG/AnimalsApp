<?php


use App\Http\Controllers\AnimalApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/animal', [AnimalApiController::class, 'index'] );

});
