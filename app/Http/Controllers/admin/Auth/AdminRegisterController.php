<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    //

    public function register()
    {

        return view('admin.auth.register');
    }

    public function store(Request $request)
    {

        //logic

        $adminKey = 'adminKey1';

        if ($request->admin_key == $adminKey) {
            //vaildation logic 


            $request->validate([
                "name" => ["required", "string"],
                "email" => ["required", "string"],
                "admin_key" => ["required", "string"],
                "password" => ["required", "string","confirmed"],
                "password_confirmation" => ["required", "string"],
            ]);

            $data = $request->except(['password_confirmation','_token','admin_key']);


            //تشفير كلمة المرور
            $data['password'] = Hash::make($request->password);

            $data = Admin::create($data);

            return redirect()->route('admin.dashbord.login');


        } else {
            return redirect()->back()->with('errorResponse', 'something went wrong');
        }
    }
}
