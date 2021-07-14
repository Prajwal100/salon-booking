<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'],function (){
   Route::get('/dashboard',[\App\Http\Controllers\Backend\DashboardController::class,'dashboard'])->name('dashboard');

    //services
    Route::get('/services',[\App\Http\Controllers\Backend\ServiceController::class,'index']);
    Route::post('servicelist',[\App\Http\Controllers\Backend\ServiceController::class,'getData']);

    Route::get('clients',[\App\Http\Controllers\Backend\ClientController::class,'index']);
    Route::post('clientList',[\App\Http\Controllers\Backend\ClientController::class,'allClients']);

});


