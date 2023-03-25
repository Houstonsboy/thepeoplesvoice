<?php

use Illuminate\Support\Facades\Route;
use App\Models\PoliticsMotion;
use App\Models\InfrastructureMotion;
use App\Models\EconomyMotion;

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
    return view('auth.register');
});
 Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/monthlyMotions', [\App\Http\Controllers\monthlyMotionsController::class, 'index']);
Route::get('/politics', [\App\Http\Controllers\politicsMotionController::class, 'index']);
Route::get('/economy', [\App\Http\Controllers\economyMotionController::class, 'index']);
Route::get('/infrastructure', [\App\Http\Controllers\InfrastructureMotionsController::class, 'index']);


Route::get('/politics/{politicsMotion}', [\App\Http\Controllers\politicsMotionController::class, 'show']);
Route::get('/infrastructure/{infrastructureMotion}', [\App\Http\Controllers\InfrastructureMotionsController::class, 'show']);
Route::get('/economy/{Economy}', [\App\Http\Controllers\economyMotionController::class, 'show']);



Route::get('/create/infrastructure', [\App\Http\Controllers\InfrastructureMotionsController::class, 'create']);
Route::get('/create/politics', [\App\Http\Controllers\politicsMotionController::class, 'create']);

Route::post('/create/politics',[\App\Http\Controllers\politicsMotionController::class, 'store']);
Route::post('/create/infrastructure', [\App\Http\Controllers\InfrastructureMotionsController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('welcome');
});

Route::post('/politics/thankyou', [\App\Http\Controllers\politicsMotionController::class, 'update']);

