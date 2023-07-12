<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\FormDataController;
use App\Http\Controllers\VenderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\placeController;
use App\Http\Controllers\PetData;
use App\Http\Controllers\CustomerData;
use App\Http\Controllers\PetmodController;

use Carbon\Carbon;
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
    return view('welcomenew');
});
Route::get('/form', function () {
    return view('form');
});


Route::post('/form-submit', [FormDataController::class, 'store'])->name('form.submit')  ;

// Route::get('/venderform', function () {
//     return view('venderform');
// });




// Route::get('/profile', function () {
//     return view('profile');
// });




Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::middleware('auth')->group(function () {
    // Existing routes
    Route::get('venderform', [AuthController::class, 'showProfileForm'])->name('venderform');
    Route::post('venderform', [AuthController::class, 'store'])->name('venderform.submit');
    
});
Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');



// for states and countries
Route::get('/cities/{state}', 'placeController@getCities')->name('getCities');


Route::get('vendor', [PetData::class,'index','calculateWeeks','calculateWee','notify']);

// Route::get('vendor', [PetData::class,'show']);
  



Route::get('/pets/{id}', [PetmodController::class, 'showPetDetails']);
