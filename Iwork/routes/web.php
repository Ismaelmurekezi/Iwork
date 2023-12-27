<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [JobController::class,'index']);

Route::get('/jobs/create', [JobController::class,'create']);
Route::post('/jobs', [JobController::class,'store']);

//showing edit form

Route::get('/jobs/{job}/edit',[JobController::class,'edit']);

Route::put('/jobs/{job}',[JobController::class,'update']);

//showing single list
Route::get('/jobs/{job}',[JobController::class,'show']);



