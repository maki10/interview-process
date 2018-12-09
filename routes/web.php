<?php

use App\Http\Controllers\InterviewController;
use App\Http\Controllers\InterviewTypeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->name('users.')->middleware(['auth'])->group(function(){
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
});

Route::prefix('interviews')->name('interviews.')->middleware(['auth'])->group(function(){
    Route::get('index', [InterviewController::class, 'index'])->name('index');
    Route::get('edit/{id}', [InterviewController::class, 'edit'])->name('edit');
    Route::get('create', [InterviewController::class, 'create'])->name('create');
    Route::post('store', [InterviewController::class, 'store'])->name('store');
    Route::post('update/{id}', [InterviewController::class, 'update'])->name('update');
});

Route::prefix('interview_types')->name('interview_types.')->middleware(['auth'])->group(function(){
    Route::get('index', [InterviewTypeController::class, 'index'])->name('index');
    Route::get('edit/{id}', [InterviewTypeController::class, 'edit'])->name('edit');
    Route::get('create', [InterviewTypeController::class, 'create'])->name('create');
    Route::post('store', [InterviewTypeController::class, 'store'])->name('store');
    Route::post('update/{id}', [InterviewTypeController::class, 'update'])->name('update');
});

Route::prefix('offices')->name('offices.')->middleware(['auth'])->group(function(){
    Route::get('index', [OfficeController::class, 'index'])->name('index');
    Route::get('edit/{id}', [OfficeController::class, 'edit'])->name('edit');
    Route::get('create', [OfficeController::class, 'create'])->name('create');
    Route::post('store', [OfficeController::class, 'store'])->name('store');
    Route::post('update/{id}', [OfficeController::class, 'update'])->name('update');
});
