<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\newGig;
use App\Http\Controllers\NewGigController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard',[NewGigController::class, 'index'])->middleware('auth');
Route::get('create',[NewGigController::class, 'create'])->middleware('auth');
Route::get('/',[RegistrationController::class, 'create']);
Route::get('login',[SessionsController::class, 'create'])->name('login');
Route::get('logout',[SessionsController::class, 'destroy']);
// Route::get('edit',[NewGigController::class, 'show']);
Route::get('/edit/{newGig}',[NewGigController::class, 'edit']);
Route::delete('dashboard/{newGig}',[NewGigController::class, 'destroy']);
Route::put('/newGigs/{newGig}', 'App\Http\Controllers\NewGigController@update')->name('newGig.update');



Route::post('submit-form',[NewGigController::class, 'store']);
Route::post('register-user',[RegistrationController::class, 'store']);
Route::post('login-user',[SessionsController::class, 'store']);
