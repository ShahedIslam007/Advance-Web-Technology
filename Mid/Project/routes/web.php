<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;


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

Route::get('/Adminlogin',[AdminController::class,'Adminlogin'])->name('Adminlogin');
Route::post('/Adminlogin',[AdminController::class,'AdminloginSubmit'])->name('Adminlogin');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');
Route::get('/ResetPassword/{Name}',[AdminController::class,'ResetPassword']);
Route::post('/ResetPassword',[AdminController::class,'ResetPasswordSubmit'])->name('ResetPassword');


Route::get('/CustomerCreate',[CustomerController::class,'CustomerCreate'])->name('CustomerCreate');
Route::post('/CustomerCreate',[CustomerController::class,'CustomerAdd'])->name('CustomerCreate');
Route::get('/CustomerList',[CustomerController::class, 'CustomerList'])->name('CustomerList');
Route::get('/CustomerOrders/{id}',[OrderController::class, 'CustomerOrders'])->name('CustomerOrders');
Route::get('/CustomerDelete/{id}',[CustomerController::class, 'CustomerDelete']);
Route::get('/CustomerEdit/{id}',[CustomerController::class,'CustomerEdit']);
Route::post('/CustomerEdit',[CustomerController::class,'CustomerEditSubmitted'])->name('CustomerEdit');


Route::get('/VendorCreate',[VendorController::class,'VendorCreate'])->name('VendorCreate');
Route::post('/VendorCreate',[VendorController::class,'VendorAdd'])->name('VendorCreate');
Route::get('/VendorList',[VendorController::class, 'VendorList'])->name('VendorList');
Route::get('/VendorEdit/{id}',[VendorController::class,'VendorEdit']);
Route::post('/VendorEdit',[VendorController::class,'VendorEditSubmitted'])->name('VendorEdit');
Route::get('/VendorDelete/{id}',[VendorController::class, 'VendorDelete']);
Route::get('/VendorProducts/{Name}',[ProductController::class, 'VendorProducts'])->name('VendorProducts');


Route::get('/AdminDashboard',[AdminController::class,'AdminDashboard'])->name('AdminDashboard')->middleware('ValidAdmin');

