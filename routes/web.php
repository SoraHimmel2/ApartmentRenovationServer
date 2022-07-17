<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\MessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/done', [\App\Http\Controllers\PhotoController::class, 'done']);
Route::get('/photos', [\App\Http\Controllers\PhotoController::class, 'photos']);
Route::get('/questions', [\App\Http\Controllers\PhotoController::class, 'questions']);
Route::get('/project-photos/{id}', [\App\Http\Controllers\PhotoController::class, 'projectPhotos']);


Route::post('/message', [\App\Http\Controllers\MessageController::class, 'message']);
