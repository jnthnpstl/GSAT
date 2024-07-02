<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApplicationController;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/auth/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [LoginController::class, 'logout']);
Route::post('/application', [ApplicationController::class, 'application']);

Route::post('/auth/check', [LoginController::class, 'loginData'])->name('auth.check');
Route::post('/auth/user', [LoginController::class, 'getUser'])->name('auth.check');
Route::post('/auth/apply_form', [ApplicationController::class, 'getApply'])->name('auth.check');
Route::get('/get/degrees', [LoginController::class, 'getDegrees']);
Route::get('/get/application', [ApplicationController::class, 'getApplicationDetails']);




Route::get('/{vue_route?}', function(){return view('app');})->where('vue_route', '[\/\w\.-]*');
?>
