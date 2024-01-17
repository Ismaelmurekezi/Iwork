<?php

use App\Http\Controllers\ApplicationController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Models\Application;

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


//Routes for Job apllication

Route::get('/applications', [ApplicationController::class, 'index']);

Route::get('/application/create', [ApplicationController::class, 'create'])->name('apply-job')->middleware('auth');
Route::post('/application', [ApplicationController::class, 'store']);
Route::get('/application/{application}/edit', [ApplicationController::class, 'edit']);
Route::put('/application/{application}', [ApplicationController::class, 'update']);
Route::get('/application/{application}', [ApplicationController::class, 'show']);
Route::delete('/application/{application}', [ApplicationController::class, 'destroy']);
Route::get('/employees', [ApplicationController::class, 'employees']);




//Routes for Job posting

Route::get('/', [JobController::class, 'index']);

Route::get('/jobs/alljobs', [JobController::class, 'alljobs']);

Route::get('/jobs/create', [JobController::class, 'create'])->name('create.job')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store']);

//showing edit form

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

Route::put('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');

//delete job list
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');

//showing single list
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::view('/alljobs', "job.alljobs ");


Route::get('/employer', [JobController::class, 'employerdashboard']);
Route::get('/employers', [JobController::class, 'employers']);


Route::get('/dashboard', [JobController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
