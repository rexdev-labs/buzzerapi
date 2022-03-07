<?php

use App\Http\Controllers\AddStatus;
use App\Http\Controllers\Auth\SignOutController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\buzzerController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Datastatus;
use App\Http\Controllers\DeleteStatus;
use App\Http\Controllers\EditStatus;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'auth'], function(){
    Route::post('signin', SignInController::class);
    Route::post('signout', SignOutController::class);
    Route::post('status', buzzerController::class);
    Route::post('register', Register::class);
    Route::post('addstatus', AddStatus::class);
    Route::post('delete', DeleteStatus::class);
    Route::post('edit', EditStatus::class);
    Route::get('profile', ProfileController::class);
    Route::get('status', Datastatus::class);
});
