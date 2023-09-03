<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //



    protected $redirectTo = RouteServiceProvider::AdminHome;

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
        
    }

    public function login()
    {

        return view('admin.auth.login');
    }

    public function checkLogin(Request $request)
    {

        //logic


        $request->validate([
            "email" => ['required', 'string'],
            "password" => ['required', 'string'], 
            'g-recaptcha-response' => ['required','captcha'],  
        ],[
            'g-recaptcha-response.required'=>' Please verify that you are not a robot.',
        ]);


        if (Auth::guard('admin')->attempt($request->only('email','password'))) {

            return redirect()->intended($this->redirectTo);//'admin.dashbord.home'
        } else {
            return redirect()->back()->withInput(['email' => $request->email])->withErrors(['errorResponse'=> 'these credentials do not match our records']);
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();

        return redirect()->route('admin.dashboard.login');
    }
}
