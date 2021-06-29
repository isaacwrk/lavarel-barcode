<?php

use App\Http\Controllers\BarcodeGeneratorController;
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
Route::get('barcode',[BarcodeGeneratorController::class,'index'])->name('barcode');
Route::get('barcode-img',[BarcodeGeneratorController::class,'imgbarcode'])->name('barcode-img');
