<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function (){
   Route::get('/',[\App\Http\Controllers\Backend\DashboardController::class,'dashboard'])->name('dashboard');
});
