<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\AccountAPIController;
use App\Http\Controllers\InvoiceAPIController;
use App\Http\Controllers\InvoiceDetailAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('product/danhsach' , [ProductAPIController::class , 'LayDanhSach']);
Route::get('product/productbydate' , [ProductAPIController::class , 'GetListProductByDate']);
Route::post('account/login' , [AccountAPIController::class , 'login']);
Route::post('account/signup' , [AccountAPIController::class , 'signup']);
Route::post('account/getListUsername' , [AccountAPIController::class , 'getListUsername']);
route::get('invoice/getInvoiceList' , [InvoiceAPIController::class , 'index']);
route::post('invoice/newInvoice' , [InvoiceAPIController::class , 'store']);
route::get('invoice/getInvoiceId' , [InvoiceAPIController::class , 'getInvoiceId']);
route::post('invoiceDetail/newInvoiceDetail' , [InvoiceDetailAPIController::class ,'store'] );

