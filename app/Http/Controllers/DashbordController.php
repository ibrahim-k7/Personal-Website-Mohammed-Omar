<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class DashbordController extends Controller
{
    function index()
    {

        $user_name = User::select("*")->get();


        return view('admin.dashbord', ['user_name' => $user_name]);
    }
}
