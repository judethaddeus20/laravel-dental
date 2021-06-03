<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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




Auth::routes();


Route::group(['middleware'=>'web'],function(){
  Route::get('/',[HomeController::class,'index']);
  Route::get('contact',[HomeController::class,'contact']);
  Route::get('services',[HomeController::class,'services']);
  Route::get('schedule',[HomeController::class,'schedule']);
  Route::post('schedule',[HomeController::class,'store']);
});

Route::group(['middleware' => 'auth'], function(){

  Route::get('approve/{schedule}',[ScheduleController::class, 'approve'])->name('schedules.approve');
  Route::get('decline/{schedule}',[ScheduleController::class, 'decline'])->name('schedules.decline');

  Route::resource('users', UserController::class);
  Route::resource('schedules', ScheduleController::class);
  Route::resource('profiles', ProfileController::class);
  Route::resource('roles', RoleController::class);

  Route::get('dashboard', [DashboardController::class,'index']);
  Route::get('profile', [DashboardController::class,'profile']);
});
