<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectsController;
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

Route::get('/', [DashboardController::class, 'index'])->name('home');

// Create Route for TasksController
Route::controller(TasksController::class)->group(function () {
    Route::get('/tasks', 'index')->name('tasks.index');
    Route::get('/tasks/test', 'test')->name('tasks.test');
    Route::POST('/tasks', 'store')->name('tasks.store');
});

// Create Route for ProjectsController
Route::controller(ProjectsController::class)->group(function () {
    Route::get('/projects', 'index')->name('projects.index');
    Route::get('/projects/test', 'test')->name('projects.test');
});

// Create Route for DashboardController
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
    Route::get('/dashboard/test', 'test');
})->name('dashboard');
