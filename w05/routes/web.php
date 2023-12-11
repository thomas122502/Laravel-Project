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
Route::get('/form', function () {
    return view('form');
});
Route::get('/editbrand', function () {
    return view('editbrand');
});

Route::get('brand', [AdminController::class, 'brand']);

Route::get('product', [AdminController::class, 'product']);

Route::get('customer', [AdminController::class, 'customer']);


//insert
Route::post('brand', [AdminController::class, 'insertbrand']);
Route::post('product', [AdminController::class, 'insertproduct']);
Route::post('customer', [AdminController::class, 'insertcustomer']);


//delete
Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('deleteproduct/{id}', [AdminController::class, 'deleteproduct'])->name('deleteproduct');
Route::get('deletecustomer/{id}', [AdminController::class, 'deletecustomer'])->name('deletecustomer');


//edit
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::get('editproduct/{id}',[AdminController::class,'editproduct'])->name('editproduct');
Route::get('editcustomer/{id}',[AdminController::class,'editcustomer'])->name('editcustomer');