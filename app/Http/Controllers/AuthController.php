<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only(['login','register','registrationProcces','loginProcces']);
        $this->middleware('auth')->only(['logout']);
    }

    public function login()
    {
    	return view('auth.login');
    }
 
    public function register()
    {
    	return view('auth.register');
    }

    public function registrationProcces(Request $request)
    {
    	$encryptPassword=bcrypt($request->password);
    	$request->merge([
    		'password'=>$encryptPassword
    	]);
    	User::create($request->all());
    	return redirect('/login');
    }

    public function loginProcces(Request $request)
    {
    	$credentials=$request->only('email','password');
    	$isLoginSucces=Auth::attempt($credentials);

    	if ($isLoginSucces) {
    		return redirect()->intended('/');
    	} else {
    		return redirect()->back();
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
