<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteCartItem(Request $request){
        $cartItem = cart::where('accountId' , $request->post('_accountId'))->where('productId' , $request->post('_productId'))->delete();
       
    }
    public function updateQuantity(Request $request) {
        $cartItem = cart::where('accountId' , $request->post('_accountId'))->where('productId' , $request->post('_productId'))->first();
        $soluong = $cartItem->quantity +1;
        $cartItem->fill([
            'quantity' => $soluong,
        ]);
        $cartItem->save();
        return json_encode ([
            'cart' => $cartItem,
        ]);
    }
    public function GetProductId (Request $request)
    {

        $Dsmasp=cart::where('accountId','=', $request->post('_accountId'))->select('productId')->get();
        return json_encode([
            'product'=>$Dsmasp
        ]);
    }
    public function layGioHang(Request $request)
    {
        $danhsachgiohang = cart::join('products','products.id','=','carts.productId')->where('accountId' , '=' , $request->post('_accountId'))->select('carts.id','accountId','carts.quantity','carts.productId','products.price','name','imageUrl')->get();
        return json_encode([
            'accountID' => $danhsachgiohang
        ]);
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $soluongsanpham = product::where('id',$request->post('_productId'))->value('quantity') ;
        $cartitem = cart::where('productId', $request->post('_productId'))->where('accountId', $request->post('_accountId'))->first();
        if($cartitem == null)
        {
        if($soluongsanpham >=1){
         $cart =new cart;
        $cart->fill([
        'accountId'=>$request->post('_accountId'),
        'productId'=>$request->post('_productId'),
        'quantity'=>'1',
        
        ]); 
        $cart->save();
        return 'Success';
        }
        else
        {
            'Fail';
        }
        }
        else{
            
            $soluong=  $cartitem->quantity +1;
            if($soluong <= $soluongsanpham){
            $cartitem->fill([
                'quantity' => $soluong,
            ]);
            $cartitem->save();
            return 'Success';
            }
            else{
                return 'Fail';
            }
        }
        /* return json_encode([
            'soluongSP' => $soluongsanpham,
            'cartitem' => $cartitem,
        ]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
