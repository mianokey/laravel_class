<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });

Route::resource('/inventory',InventoryController::class);
Route::resource('/farm',FarmController::class);
Route::resource('/student',StudentController::class);
