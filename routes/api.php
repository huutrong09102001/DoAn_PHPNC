<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\AccountAPIController;
use App\Http\Controllers\InvoiceAPIController;
use App\Http\Controllers\InvoiceDetailAPIController;
use App\Http\Controllers\CartAPIController;

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
Route::get('product/productHot' , [ProductAPIController::class , 'LayDSSPNoiBat']);
Route::get('product/productBestSeller' , [ProductAPIController::class , 'LayDSSPBanChay']);
Route::post('account/login' , [AccountAPIController::class , 'login']);
Route::post('account/signup' , [AccountAPIController::class , 'signup']);
Route::post('account/getListUsername' , [AccountAPIController::class , 'getListUsername']);
Route::get('invoice/getInvoiceList' , [InvoiceAPIController::class , 'index']);
Route::post('invoice/newInvoice' , [InvoiceAPIController::class , 'store']);
Route::post('invoice/getInvoiceId' , [InvoiceAPIController::class , 'getInvoiceId']);
Route::post('invoiceDetail/newInvoiceDetail' , [InvoiceDetailAPIController::class ,'store'] );
Route::post('invoice/getListInvoiceByAccountId',  [InvoiceAPIController::class , 'getListInvoiceById']);
Route::post('invoiceDetail/getListInvoiceDetail', [InvoiceDetailAPIController::class , 'getListInvoiceDetail']);
route::post('cart/layGioHang' , [CartAPIController::class ,'layGioHang'] );

Route::get('invoice/danhsachhoadon' , [InvoiceAPIController::class , 'Laydanhsachhoadon']);
Route::post('cart/LaydanhsachSP' , [CartAPIController::class , 'GetProductId']);
Route::post('cart/Themgiohang' , [CartAPIController::class , 'store']);
Route::post('cart/updateQuantity', [CartAPIController::class , 'updateQuantity']);
Route::post('cart/deleteCartItem', [CartAPIController::class , 'deleteCartItem']);

