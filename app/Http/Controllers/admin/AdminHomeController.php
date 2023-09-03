<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

   /* public function index(){

        return view('admin.home');
    }*/
    function index()
    {

       


        return view('admin.dashboard');
    }
}
