<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ControllerAdmin;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('cart',[FrontendController::class,'cart'])->name('cart');
Route::get('/single',[FrontendController::class,'single'])->name('single');
//Route::get('traicay-list',[FrontendController::class,'index']);
Route::get('/product',[FrontendController::class,'product'])->name('product');
Route::get('/admin',[ControllerAdmin::class,'index'])->name('admin');
Route::get('/table-data-table',[ControllerAdmin::class,'datatable'])->name('table');
Route::get('/adduser',[ControllerAdmin::class,'adduser'])->name('addproduct');
Route::get('/adminproduct',[ControllerAdmin::class,'product'])->name('adminproduct');