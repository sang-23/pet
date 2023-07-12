<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetData;
use App\Http\Controllers\CustomerData;
use Carbon\Carbon;

use App\Models\Templates;
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



Route::get('/', function () {
    return view('welcome');
});
Route::get('vendor', [PetData::class,'index','calculateWeeks','notify']);;

// Route::get('vendor', [PetData::class,'show']);
// Route::get('vendor', [TemplateData::class,'showCarousel']);
  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
