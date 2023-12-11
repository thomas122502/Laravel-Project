<?php

use App\Http\Controllers\AdminController;
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
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('brand', [AdminController::class, 'brand']);

Route::get('product', [AdminController::class, 'product']);

Route::get('customer', [AdminController::class, 'customer']);