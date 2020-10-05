<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeachController;
use App\Http\Controllers\ImageUploadController;

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

// Signature Pad
Route::get('/signature',[SignatureController::class,'index']);
Route::post('/signature',[SignatureController::class,'upload'])->name('signature');

// generate PDF
Route::get('/pdf', [PDFController::class,'index']);
Route::get('/pdf/report', [PDFController::class,'daily_report'])->name('report');

//Ajax Dynamic Dependent Dropdown
Route::get('/category', [CategoryController::class,'index']);
Route::post('/category', [CategoryController::class,'subcat'])->name('subcat');

//Search Multiple Models using Spatie Searchable Package
Route::get('/search', [SeachController::class, 'index']);
Route::get('/search/results', [SeachController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Client Side Form Validation with jQuery
Route::get('/validation', function () {
    return view('validation.index');
});

Route::post('/validation', [App\Http\Controllers\HomeController::class, 'validation'])->name('validate');

//Form Validation Using Vue Js
Route::get('vuejs/form', [VueController::class,'index']);
Route::post('vuejs/form', [VueController::class,'store']);

//Dropzone
Route::get('dropzone/upload',[ImageUploadController::class, 'index']);
Route::post('dropzone/upload/store',[ImageUploadController::class, 'store']);
Route::post('dropzone/delete',[ImageUploadController::class, 'destroy']);
