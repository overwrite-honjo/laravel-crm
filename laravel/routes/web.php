<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'index']);
    Route::get('/customers/create', [\App\Http\Controllers\CustomerController::class, 'create']);
    Route::post('/customers', [\App\Http\Controllers\CustomerController::class, 'store']);
    Route::get('/customers/{id}/edit', [\App\Http\Controllers\CustomerController::class, 'edit']);
    Route::put('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'update']);
    Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy']);
});

require __DIR__.'/auth.php';
