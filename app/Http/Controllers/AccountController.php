<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\provider;
use App\Http\Requests\StoreaccountRequest;
use App\Http\Requests\UpdateaccountRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blockAccount (account $account)
    {
        $account->fill([
            'status' => 1,
        ]);
        $account->save();
        return Redirect::route('account.index');
    }
    protected function fixImage (account $account )
    {
        if(Storage::disk('public')->exists($account->avt)){
            $account->avt = Storage::url($account->avt);
        } else {
            $account->avt = "/images/iphone-12-xanh-la-1-1-org.jpg";

        }
    }
    public function index()
    {
        $lstProv = provider::all();
        $lstaccount = account::all();
        foreach ($lstaccount as $pro){
            $this->fixImage($pro);
        }
        return view('layouts.account.index' , ['lstaccount' => $lstaccount , 'lstProv' => $lstProv]);
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
     * @param  \App\Http\Requests\StoreaccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccountRequest $request)
    {
        $account = new account;
        // $loai = 1;
      // if($request->input('loai') == 'Samsung')
       //  $loai = 2;
        // else if ($request->input('loai') == 'Xiaomi')
        // $loai = 3;
        // else if ($request->input('loai') == 'Oppo')
        // $loai = 4;
 
         $account->fill([
             'username' => $request->input('tendangnhap'),
             'password' => $request->input('matkhau'),
             'fullname' => $request->input('hovaten'),
             'address' => $request->input('diachi'),
             'phone' => $request->input('sodienthoai'),
             'email' => $request->input('email'),
             'sex' => $request->input('gioitinh'),
             'status' => $request->input('status'),
             'avt' => '',
             'status'=> '0',
             
 
         ]);
         $account->save();
         if($request->hasFile('hinh')){
             $account->avt = $request->file('hinh')->store('images/account/'.$account->id , 'public');
         }
         $account->save();
         return Redirect::route('account.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {
        $this->fixImage($account);
       
        return view('layouts.account.edit' ,["account" => $account]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccountRequest  $request
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccountRequest $request, account $account)
    {
        if($request->hasFile("hinh")){
            $account->avt = $request->file("hinh")->store('images/account/'.$account->id,'public');

        }
        $account->fill([
            'username' => $request->input('tendangnhap'),
            'password' => $request->input('matkhau'),
            'fullname' => $request->input('hovaten'),
            'address' => $request->input('diachi'),
            'phone' => $request->input('sodienthoai'),
            'email' => $request->input('email'),
            'sex' => $request->input('gioitinh'),
            'status'=> '0',
            
        ]);
        $account->save();
        return Redirect::route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(account $account)
    {
        $account->delete();
        return Redirect::route('account.index');
    }
}
