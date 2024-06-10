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

Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);


Route::post('/logout', [UserController::class, 'logout']);

Route::post('/store', [UserController::class, 'store']);


Route::get('/add/student', [StudentController::class, 'create']);
Route::post('/add/student', [StudentController::class, 'store']);
