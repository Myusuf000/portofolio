<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BiodatakuController;

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

Route::get('/', [FrondController::class, 'index'])->name('frond');
Route::prefix('admin')->group(function () {
    Route::resource('tentang', TentangController::class)->except('show');
    Route::resource('biodataku', BiodatakuController::class)->except('show');
});


