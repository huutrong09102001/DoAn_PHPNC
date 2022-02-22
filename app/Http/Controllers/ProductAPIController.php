<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\invoice_detail;
use Illuminate\Http\Request;

class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function LayDanhSach()
    {
        $danhsach = product::orderBy('price')->get();
        return json_encode([
            "success" => true ,
            "data" => $danhsach
        ]);
    }
    public function GetListProductByDate()
    {
        $product = product::whereMonth('created_at' , '1')->get();
        return json_encode([
            "success" => true ,
            "data" => $product

        ]);
    }

    function LayDSSPBanChay()
    {
        $product = product::orderBy('quantity')->take(6)->get();
        
        return json_encode ([
            'data' => $product
        ]);
    }
    function LayDSSPNoiBat()
    {
        $product = product::orderBy('price')->take(6)->get();
        return json_encode ([
            'data' => $product
        ]);
    }
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
