<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function index(){

        $course_data= Course::select("*")->orderby("id", "ASC")->get();

        return view('admin.coursesAdd',['course_data' => $course_data]);

    }

    public function show(){

        $course_data= Course::select("*")->orderby("id", "ASC")->get();

        return view('front.courses',['course_data' => $course_data]);

    }

    public function edit($id)
    {

        $course_data = Course::select("*")->find($id);

        return view('admin.courseEdit', ['course_data' => $course_data]);
    }

    public function store(AddCourseRequest $request){

        $datatoinsert['name'] = $request->courseName;
        $datatoinsert['duration'] = $request->courseTime;
        $datatoinsert['presenter'] = $request->coursePres;
        $datatoinsert['place'] = $request->coursePlace;
        $datatoinsert['price'] = $request->coursePrice;
        $datatoinsert['created_at'] = date("Y-m-d H:i:s");
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        Course::create($datatoinsert);

        return redirect()->route('index.Courses')->with(['success' => 'تمت الاضافة بنجاح']);

    }

    public function update($id, UpdateCourseRequest $request)
    {
        $datatoinsert['name'] = $request->courseName;
        $datatoinsert['duration'] = $request->courseTime;
        $datatoinsert['presenter'] = $request->coursePres;
        $datatoinsert['place'] = $request->coursePlace;
        $datatoinsert['price'] = $request->coursePrice;

        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        Course::where(['id' => $id])->update($datatoinsert);

        return redirect()->route('index.Courses')->with(['success' => 'تم التحديث بنجاح']);
    }

    function destroy($id)
    {

        Course::findOrFail($id)->delete();

        return redirect()->route('index.Courses')->with(['success' => 'تم الحذف بنجاح']);
    }
}
