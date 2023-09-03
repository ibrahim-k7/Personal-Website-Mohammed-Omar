<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\counseling;
use App\Models\bag;
use App\Models\Course;
use App\Models\Success_partner;

class Home_Controller extends Controller
{

    public function index()
    {
        $counseling_data = counseling::select("*")->orderby("id","ASC")->get();
       // $bag_data = bag::select("*")->orderby("id","ASC")->get();
        $bag_data = bag::with('content')->get();
        //$course_data= Course::select("*")->orderby("id","ASC")->get();
        $course_data = Course::with(['goal','interlocutor'])->get();
        $success_partner_data= Success_partner::select("*")->orderby("id","ASC")->get();

        return view(
            'front.home',
            [
                'counseling_data' => $counseling_data,
                'bag_data' => $bag_data,
                'course_data' => $course_data,
                'success_partner_data' => $success_partner_data
            ]
        );
    }
}
