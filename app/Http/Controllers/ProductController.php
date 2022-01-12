<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\provider;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function fixImage (product $product )
    {
        if(Storage::disk('public')->exists($product->imageUrl)){
            $product->imageUrl = Storage::url($product->imageUrl);
        } else {
            $product->imageUrl = "/img/no_image_placeholder.png" ;

        }
    }
    public function index()
    {
        $lstProduct = product::all();
        return view('layouts.product.index' , ['lstProduct' => $lstProduct]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $this->fixImage($product);
        $lstProv = provider::all();
        return view('layouts.product.edit' ,["product" => $product , "lstProv" => $lstProv]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        if($request->hasFile("hinh")){
            $product->imageUrl = $request->file("hinh")->store('images/product/'.$product->id,'public');

        }
        $product->fill([
            'name' -> $request->input('ten'),
            'description' -> $request->input('mota'),
            'price' -> $request->input('gia'),
            'quantity' -> $request->input('soluong'),
            'screen' -> $request->input('manhinh'),
            'ram' -> $request->input('ram'),
            'rom' -> $request->input('rom'),
            'pin' -> $request->input('pin'),
            'providerId' -> $request->input('loai'),
        ]);
        $product->save();
        return Redirect::route('product.index');
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
