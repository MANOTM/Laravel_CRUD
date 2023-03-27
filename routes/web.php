<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnagesController;

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

Route::controller(PersonnagesController::class)->group(function(){
    Route::get('/','index');
    Route::get('/{id}','show')->name('personnages.show');
    Route::get('/per/Add','add')->name('personnages.add');
    Route::post('/store','store')->name('personnages.store');;
    Route::get('/{id}/edit','edit')->name('personnages.edit');;
    Route::put('/{id}/update','update')->name('personnages.update');;
    Route::DELETE('/delete/{id}','destroy')->name('personnages.delete');
});
