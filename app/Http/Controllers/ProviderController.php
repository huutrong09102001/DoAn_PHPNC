<?php

namespace App\Http\Controllers;

use App\Models\provider;
use App\Models\invoice;
use App\Http\Requests\StoreproviderRequest;
use App\Http\Requests\UpdateproviderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $lstProvider = provider::all();
        
        
        return view('layouts.provider.index' , ['lstProvider' => $lstProvider ,'countConfirm' =>$countConfirmOrder , 'countTransported' =>$countTransportedOrder ,'countShipping' =>$countShippingOrder , 'countPending' =>$countPendingOrder]);
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
     * @param  \App\Http\Requests\StoreproviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new provider;
        

        $provider->fill([
            'name' => $request->input('ten'),
            'status' => '0',

        ]);
        $provider->save();
        
        return Redirect::route('provider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(provider $provider)
    { 
       
        return view('layouts.provider.edit' ,["provider" => $provider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproviderRequest  $request
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, provider $provider)
    {
        $provider->fill([
            'name' => $request->input('ten'),
        ]);
        $provider->save();
        return Redirect::route('provider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(provider $provider)
    {
        $provider->delete();
        return Redirect::route('provider.index');
    }
}
