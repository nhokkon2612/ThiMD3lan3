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

Route::prefix('products')->name('product')->group(function (){
    Route::get('/index',[\App\Http\Controllers\ProductController::class,'index'])->name('.index');
    Route::get('/create',[\App\Http\Controllers\ProductController::class,'create'])->name('.create');
    Route::post('/store',[\App\Http\Controllers\ProductController::class,'store'])->name('.store');
    Route::get('/show',[\App\Http\Controllers\ProductController::class,'show'])->name('.show');
    Route::get('/{id}/edit',[\App\Http\Controllers\ProductController::class,'edit'])->name('.edit');
    Route::get('/{id}/delete',[\App\Http\Controllers\ProductController::class,'destroy'])->name('.delete');
    Route::post('/{id}/update',[\App\Http\Controllers\ProductController::class,'update'])->name('.update');
});
