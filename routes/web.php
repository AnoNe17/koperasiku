<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('content')->group(function () {
    Route::get('/', 'ContentController@index')->name('content');
    Route::get('create', [ContentController::class, 'create'])->name('content.create');
    Route::post('store', [ContentController::class, 'store'])->name('content.store');
    Route::get('edit', [ContentController::class, 'edit'])->name('content.edit');
    Route::post('update', [ContentController::class, 'update'])->name('content.update');
});
