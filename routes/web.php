<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/monthlyMotions', [\App\Http\Controllers\monthlyMotionsController::class, 'index']);

Route::get('/politics', [\App\Http\Controllers\politicsMotionController::class, 'index']);
Route::get('/economy', [\App\Http\Controllers\economyMotionController::class, 'index']);
Route::get('/infrastructure', [\App\Http\Controllers\InfrastructureMotionsController::class, 'index']);


Route::get('/politics/{politicsMotion}', [\App\Http\Controllers\politicsMotionController::class, 'show']);

Route::get('/infrastructure/{Infrastructure}', [\App\Http\Controllers\InfrastructureMotionsController::class, 'show']);

Route::get('/infrastructure/create', [\App\Http\Controllers\InfrastructureMotionsController::class, 'create']);

Route::put('/politics/{politicsMotion}/Thank-you', [\App\Http\Controllers\BlogPostController::class, 'update']);