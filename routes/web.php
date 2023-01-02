<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\addDataController;
use App\Http\Controllers\addPageController;

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
Route::get('/',[HomeController::class,'Home'])->name('Home');
Route::get('/addData',[addDataController::class,'addData'])->name('addDataPage');
Route::get('/addPage',[addPageController::class,'addPage'])->name('addPage');
Route::post('/studentData',[addDataController::class,'studentData'])->name('studentData');
