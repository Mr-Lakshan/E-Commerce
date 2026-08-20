<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class,'login']);
Route::get('/register', [UserController::class,'register']);
Route::get('/users', [UserController::class,'users']);
Route::post('/register', [UserController::class,'store']);
Route::get('/users/{user}/edit', [UserController::class,'edit']);
Route::delete('/users/{user}', [UserController::class,'destroy']);
Route::put('/users/{user}', [UserController::class,'update']);