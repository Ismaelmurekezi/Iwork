<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;

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


Route::get('/',function (){
    return view('welcome');
});

Route::get('/', [JobController::class,'index']);

Route::get('/jobs/create', [JobController::class,'create'])->middleware('auth');
Route::post('/jobs', [JobController::class,'store']);

//showing edit form

Route::get('/jobs/{job}/edit',[JobController::class,'edit'])->middleware('auth');

Route::put('/jobs/{job}',[JobController::class,'update'])->middleware('auth');

//delete job list
Route::delete('/jobs/{job}',[JobController::class,'destroy'])->middleware('auth');

//showing single list
Route::get('/jobs/{job}',[JobController::class,'show']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';