<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[TaskController::class,'allTask'])->name('all-task');
Route::get('/task/{id}',[TaskController::class,'Task'])->name('single-task');
Route::get('/task',[TaskController::class,'viewForm'])->name('viewForm');
Route::post('/task',[TaskController::class,'newTask'])->name('newTask');
Route::get('/task/{id}/edit',[TaskController::class,'editTask'])->name('edit-task');
Route::put('/task/{id}/update',[TaskController::class,'taskUpdate'])->name('taskUpdate');
