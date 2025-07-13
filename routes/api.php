<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/v1/categories', [CategoryController::class, 'index']);

Route::prefix('v1')->middleware(['throttle:api', 'auth:sanctum'])->group(function(){
Route::apiResource('categories', CategoryController::class);
Route::apiResource('posts', PostController::class);
});