<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function showForm(){
        return view('layouts.login');
    }
    public function authenticate (Request $request){
        $acc =[
            'email' => $request->username,
            'password' => $request->password,
        ];
        if(Auth::attempt($acc)){
            return Redirect::route('product.index');
        }
        return back()->withErros([
            'email' => 'Dang nhp khong thanh cong',
        ]);
    }
    public  function logOut(){
        Auth::logout();
        return Redirect::route('login');
    }
}

?>