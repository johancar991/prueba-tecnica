<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| En este espacio se encuentran las rutas establecidas para el módulo Fibonacci
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/generate-fibonacci',[ \App\Http\Controllers\Api\FibonacciController::class, 'getFibonacci']);
