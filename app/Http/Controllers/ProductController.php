<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\provider;
use App\Models\invoice;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Carbon\Carbon;



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
            $product->imageUrl = "/images/iphone-12-xanh-la-1-1-org.jpg";

        }
    }
    public function index()
    {
        function countOrder($status){
            $count = invoice::where('invoices.status' , '=' , $status)->count();
            return $count;
        }
        $countConfirmOrder = countOrder(0);
        $countTransportedOrder = countOrder(1);
        $countShippingOrder = countOrder(2);
        $countPendingOrder = countOrder(5);
        $lstProv = provider::all();
        $lstProduct = product::all();
        foreach ($lstProduct as $pro){
            $this->fixImage($pro);
        }
        return view('layouts.product.index' , ['lstProduct' => $lstProduct , 
        'lstProv' => $lstProv , 'countConfirm' =>$countConfirmOrder , 'countTransported' =>$countTransportedOrder ,'countShipping' =>$countShippingOrder , 'countPending' =>$countPendingOrder]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product;
        $loai = 1;
        if($request->input('loai') == 'Samsung')
        $loai = 2;
        else if ($request->input('loai') == 'Xiaomi')
        $loai = 3;
        else if ($request->input('loai') == 'Oppo')
        $loai = 4;

        $product->fill([
            'name' => $request->input('ten'),
            'description' => $request->input('mota'),
            'price' => $request->input('gia'),
            'quantity' => $request->input('soluong'),
            'screen' => $request->input('manhinh'),
            'ram' => $request->input('ram'),
            'rom' => $request->input('rom'),
            'pin' => $request->input('pin'),
            'imageUrl' => '',
            'status'=> '0',
            'providerId' => $loai,

        ]);
        $product->save();
        if($request->hasFile('hinh')){
            $product->imageUrl = $request->file('hinh')->store('images/product/'.$product->id , 'public');
        }
        $product->save();
        return Redirect::route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        
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
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        if($request->hasFile("hinh")){
            $product->imageUrl = $request->file("hinh")->store('images/product/'.$product->id,'public');

        }
        $product->fill([
            'name' => $request->input('ten'),
            'description' => $request->input('mota'),
            'price' => $request->input('gia'),
            'quantity' => $request->input('soluong'),
            'screen' => $request->input('manhinh'),
            'ram' => $request->input('ram'),
            'rom' => $request->input('rom'),
            'pin' => $request->input('pin'),
            'providerId' => $request->input('loai'),
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
        $product->delete();
        return Redirect::route('product.index');
    }
}
