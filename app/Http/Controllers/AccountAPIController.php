<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;

class AccountAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListUsername (Request $request)
    {
        $usernames = account::where('username' , '=' , $request->post('_username'))->value('username');
        return json_encode([
            'data' => $usernames
        ]);
    }
    public function login (Request $request)
    {
        if($user = account::where('username' , '=' ,$request->post('_username'))->where('password', '=' ,$request->post("_password"))->get())
        {
            return json_encode([
                
                "data" => $user
            ]);
            
        }
        else
        {
            return 0;
        }
    }
     /* public function getAccountByUsername ( Request $request)
     {
         $acc = account::where('username' , '=' , $request->post('_username'))->get();
         return json_encode([
             "data"
         ])
     } */

    public function signup (Request $request)
    {
        $acc = new account;
        $acc->fill([
            'username' => $request->post('_username'),
            'password' => $request->post('_password'),
            'address' => $request->post('_address'),
            'phone' => $request->post('_phone'),
            'fullname' => $request->post('_fullname'),
            'email' => $request->post('_email'),
            'sex' => $request->post('_gioitinh'),
            'status' => '0',
        ]);
        if($acc->save()){
            return response()->json([
                'Success' => true
            ]);
            
        }
        else 
        {
            return response()->json([
                'Success' => false
            ]);
        }
    }
    public function index()
    {
        //
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
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(account $account)
    {
        //
    }
}

