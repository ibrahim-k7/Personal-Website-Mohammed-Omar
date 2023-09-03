<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCourseGoalRequest;
use App\Http\Requests\UpdateCourseGoalRequest;
use App\Models\Course;
use App\Models\Course_Goal;
use Illuminate\Http\Request;

class CourseGoalController extends Controller
{
    public function index(){
        $coueseGoals_data = Course_Goal::with('course')->get();


        return view('admin.coursesAdd', ['coueseGoals_data' => $coueseGoals_data,]);
    }

   /* public function indexContent($id){

        $bagContent_data =Bag_Content::where('bag_id', $id)->get();

        

        return view('admin.bagContent',['bagContent_data' => $bagContent_data]);
    }*/

    function indexContent($id)
    {

        $course_data = Course::find($id)->goal;


        return view('admin.courseGoal', ['course_data' => $course_data,]);
    }

    public function edit($id){

        $course_goals_data = Course_Goal::select("*")->find($id);

        return view('admin.courseGoalEdit',['course_goals_data' => $course_goals_data]);

    }

    public function update($id,UpdateCourseGoalRequest $request){
        $datatoinsert['goal']=$request->goal;
        $datatoinsert['updated_at']=date("Y-m-d H:i:s");


        Course_Goal::where(['id'=>$id])->update($datatoinsert);

        return redirect()->route('index.Goal',$request->courseId)->with(['success'=>'تم التحديث بنجاح']);

    }


    function store(AddCourseGoalRequest $request)
    {

        $course=Course::findOrfail($request->courseIdForGoal);

        $course->goal()->create([
            'goal' =>$request->goal,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")

        ]);


        return redirect()->route('index.Courses')->with(['success'=>'تمت الاضافة بنجاح']);

    }

    function destroy(int $id)
    {

        Course_Goal::findOrFail($id)->delete();

        return redirect()->route('index.Courses')->with(['success' => 'تم الحذف بنجاح']);
    }
}
