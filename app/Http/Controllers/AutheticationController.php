<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isNull;

class AutheticationController extends Controller
{
 public function   loginvalidation (Request $request)
 {
    $user =User::where('email',$request->input("email"))->where('password',$request->input("password"))->get()->first();

    if($user !== null){
        Auth::login($user);
        return Redirect::intended('home');
    }
    return Redirect::route('login')->with(["error" =>["email"=>"Usuario NO valido"]]);

    
 }//
}
