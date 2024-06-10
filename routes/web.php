<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

//Common routes naiming
//index - show all data
//show - show a single data
//create - show a form to new user
//store - store a data
//edit - Show a form to edit a data
//update - update a data
//destroy - delete a data

Route::controller(UserController::class)->group(function(){
    Route::get('/register','register');
    Route::get('/login','login')->name('login')->middleware('guest');
    Route::post('/login/process','process');
    Route::post('/logout','logout');
    Route::post('/store','store');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/', 'index')->middleware('auth');
    Route::get('/add/student', 'create');
    Route::post('/add/student', 'store');
    Route::get('/student/{id}', 'show');
    Route::put('/student/{id}', 'update');
    Route::delete('/student/{id}', 'destroy');
});



