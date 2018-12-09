<?php

use App\Http\Controllers\InterviewController;
use App\Http\Controllers\InterviewTypeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
use App\User;

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

Route::bind('trashed_user', function ($id) {
    return User::withTrashed()->findOrFail($id);
});

Route::prefix('users')->name('users.')->middleware(['auth'])->group(function(){
    Route::get('index', [UserController::class, 'index'])->name('index')->middleware('can:view,App\User');
    Route::get('edit/{trashed_user}', [UserController::class, 'edit'])->name('edit')->middleware('can:update,App\User');
    Route::get('create', [UserController::class, 'create'])->name('create')->middleware('can:create,App\User');
    Route::post('store', [UserController::class, 'store'])->name('store')->middleware('can:create,App\User');
    Route::post('update/{trashed_user}', [UserController::class, 'update'])->name('update')->middleware('can:update,App\User');
    Route::get('destroy/{trashed_user}', [UserController::class, 'destroy'])->name('destroy')->middleware('can:destroy,App\User');
    Route::get('restore/{trashed_user}', [UserController::class, 'restore'])->name('restore')->middleware('can:restore,App\User');
});

Route::prefix('interviews')->name('interviews.')->middleware(['auth'])->group(function(){
    Route::get('index', [InterviewController::class, 'index'])->name('index')->middleware('can:view,App\Interview');
    Route::get('edit/{interview}', [InterviewController::class, 'edit'])->name('edit')->middleware('can:update,App\Interview');
    Route::get('create', [InterviewController::class, 'create'])->name('create')->middleware('can:create,App\Interview');
    Route::post('store', [InterviewController::class, 'store'])->name('store')->middleware('can:create,App\Interview');
    Route::post('update/{interview}', [InterviewController::class, 'update'])->name('update')->middleware('can:update,App\Interview');
});

Route::prefix('interview_types')->name('interview_types.')->middleware(['auth'])->group(function(){
    Route::get('index', [InterviewTypeController::class, 'index'])->name('index')->middleware('can:view,App\InterviewType');
    Route::get('edit/{interviewType}', [InterviewTypeController::class, 'edit'])->name('edit')->middleware('can:update,App\InterviewType');
    Route::get('create', [InterviewTypeController::class, 'create'])->name('create')->middleware('can:create,App\InterviewType');
    Route::post('store', [InterviewTypeController::class, 'store'])->name('store')->middleware('can:create,App\InterviewType');
    Route::post('update/{interviewType}', [InterviewTypeController::class, 'update'])->name('update')->middleware('can:update,App\InterviewType');
});

Route::prefix('offices')->name('offices.')->middleware(['auth'])->group(function(){
    Route::get('index', [OfficeController::class, 'index'])->name('index')->middleware('can:view,App\Office');
    Route::get('edit/{office}', [OfficeController::class, 'edit'])->name('edit')->middleware('can:update,App\Office');
    Route::get('create', [OfficeController::class, 'create'])->name('create')->middleware('can:create,App\Office');
    Route::post('store', [OfficeController::class, 'store'])->name('store')->middleware('can:create,App\Office');
    Route::post('update/{office}', [OfficeController::class, 'update'])->name('update')->middleware('can:update,App\Office');
});
