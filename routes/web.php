<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompreController;
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

Route::get('/', HomeController::class);    

Route::controller(CompreController::class)->group(function(){
    Route::get('compre_pampeano/index', 'index')->name('compre.index');
    Route::get('compre_pampeano/create', 'create')->name('compre.create');
    Route::post('compre_pampeano', 'store')->name('compre.store');
    Route::get('compre_pampeano/{dato}', 'show')->name('compre.show');
    Route::get('compre_pampeano/{dato}/edit', 'edit')->name('compre.edit');
    Route::put('compre_pampeano/{dato}', 'update')->name('compre.update');
    Route::delete('compre_pampeano/{dato}', 'destroy')->name('compre.destroy');     
});



