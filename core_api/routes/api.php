<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartementsController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes (Require Token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
      Route::get('/employee', [EmployeeController::class, 'index']);
      Route::apiResource('departement', DepartementsController::class);
        // Route::get('/departement', [DepartementsController::class, 'index']);
        // Route::post('/departement', [DepartementsController::class, 'add']);
 });