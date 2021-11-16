<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
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
    return redirect()->route('home');
});

Route::group(['prefix'=>'admin'],function (){
    Route::get('/', function () {
        return view('admin.pages.home');
    })->name('home');
    Route::get('order/list',[OrderController::class,'orderList'])->name('admin.order.list');
    Route::get('product-list',[ProductController::class,'productList'])->name('admin.product.list');
    Route::get('product/create',[ProductController::class,'productCreateForm']);
    Route::post('product/store',[ProductController::class,'productStore'])->name('admin.product.store');
    
    
    // employee
    Route::get('/employee/list',[EmployeeController::class,'list'])->name('admin.employee.list');
    Route::get('/employee/form',[EmployeeController::class,'create'])->name('admin.employee.form');  
    Route::post('/employee/add',[EmployeeController::class,'add'])->name('admin.employee.add'); 
});


