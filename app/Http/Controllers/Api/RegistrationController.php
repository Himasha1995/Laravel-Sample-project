<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function process(Request $request){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobileNo=$request->mobileNo;
        if($request->confirmPassword==$request->password){
         $user->password=Hash::make($request->password);
        }else{
         return ["result"=>"email or password is incorrect"];
        }
        $user->save();
 
        $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials)) {
             return ["result"=>"user registerd and loged in"];
         } 
         
     }
}
