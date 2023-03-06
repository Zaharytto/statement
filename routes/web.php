<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\ManagersController;


Route::get('/', [ClientsController::class, 'index']);
Route::post('/', [ClientsController::class, 'store']);
Route::get('/success', [ClientsController::class, 'success']);


Route::get('/manager', [AuthorizationController::class, 'index']);
Route::post('/manager', [AuthorizationController::class, 'store']);
Route::get('/home', [ManagersController::class, 'index']);


Route::get('/home/{id}/edit', [ManagersController::class, 'edit']);
Route::patch('/home/{id}', [ManagersController::class, 'update']);

