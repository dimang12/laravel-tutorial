<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

// Create Route for TasksController
Route::controller(TasksController::class)->group(function () {
    Route::get('/tasks', 'index');
    Route::get('/tasks/test', 'test');
});

// Create Route for DashboardController
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/dashboard/test', 'test');
});
