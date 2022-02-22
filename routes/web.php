<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;



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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::resource('account', AccountController::class);

Route::resource('provider', ProviderController::class);
Route::get('order/confirm' , [InvoiceController::class , 'getWaitingConfirmOrder'])->name('order.confirm');
Route::put('order/confirm/{id}',[InvoiceController::class , 'updateConfirmOrder'])->name('confirmOrder.update');
Route::get('order/transported' , [InvoiceController::class , 'getTransportedOrder'])->name('order.transported');
Route::put('order/transported/{id}',[InvoiceController::class , 'updateConfirmOrder'])->name('transportedOrder.update');
Route::get('order/shipping' , [InvoiceController::class , 'getShippingOrder'])->name('order.shipping');
Route::put('order/shipping/{id}',[InvoiceController::class , 'updateShippingOrder'])->name('shippingOrder.update');
Route::get('order/pending' , [InvoiceController::class , 'getPendingOrder'])->name('order.pending');
Route::put('order/pending/{id}',[InvoiceController::class , 'updatePendingOrder'])->name('pendingOrder.update');
Route::put('order/refuse/{id}',[InvoiceController::class , 'refusePendingOrder'])->name('pendingOrder.refuse');
Route::put('account/block/{account}',[AccountController::class , 'blockAccount'])->name('account.block');
Route::delete('order/confirm/delete/{id}' , [InvoiceController::class , 'deleteByInvoiceId'])->name('confirmOrder.delete');
Route::get('login',[LoginController::class , 'showForm'])->name('login');
Route::post('login',[LoginController::class , 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function(){
    Route::resource('product', ProductController::class);
    Route::resource('invoice', InvoiceController::class);
});
Route::get('logout' , [LoginController::class , 'logOut'])->name('logout');