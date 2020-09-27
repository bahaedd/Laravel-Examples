<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

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
