<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCourseInterlocutorRequest;
use App\Http\Requests\UpdateCourseInterlocutorRequest;
use App\Models\Course;
use App\Models\Course_Interlocutor;
use Illuminate\Http\Request;

class CourseInterlocutorController extends Controller
{
    public function index(){
        $couese_interlocutor_data = Course_Interlocutor::with('course')->get();


        return view('admin.coursesAdd', ['couese_Interlocutor_data' => $couese_interlocutor_data,]);
    }


    function indexContent($id)
    {

        $course_data = Course::find($id)->interlocutor;


        return view('admin.courseInterlocutor', ['course_data' => $course_data,]);
    }

    public function edit($id){

        $course_interlocutor_data = Course_Interlocutor::select("*")->find($id);

        return view('admin.courseInterlocutorEdit',['course_interlocutor_data' => $course_interlocutor_data]);

    }

    public function update($id,UpdateCourseInterlocutorRequest $request){
        $datatoinsert['interlocutor']=$request->interlocutor;
        $datatoinsert['updated_at']=date("Y-m-d H:i:s");


        Course_Interlocutor::where(['id'=>$id])->update($datatoinsert);

        return redirect()->route('index.Interlocutor',$request->courseId)->with(['success'=>'تم التحديث بنجاح']);

    }


    function store(AddCourseInterlocutorRequest $request)
    {

        $course=Course::findOrfail($request->courseIdForInterlocutor);

        $course->interlocutor()->create([
            'interlocutor' =>$request->interlocutor,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")

        ]);


        return redirect()->route('index.Courses')->with(['success'=>'تمت الاضافة بنجاح']);

    }

    function destroy($id)
    {

        Course_Interlocutor::findOrFail($id)->delete();

        return redirect()->route("index.Courses")->with(['success' => 'تم الحذف بنجاح']);
    }
}
