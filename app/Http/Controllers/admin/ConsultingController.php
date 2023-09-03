<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\counseling;

use App\Http\Requests\AddConsultingRequest;

use App\Http\Requests\UpdateCounselingRequest;

class ConsultingController extends Controller
{
    //for -> admin
    function index()
    {
        $counseling_data = counseling::select("*")->orderby("id", "ASC")->get();
        return view('admin.consultingAdd', ['counseling_data' => $counseling_data]);
    }

    //for -> user
    function show()
    {
        $counseling_data = counseling::select("*")->orderby("id", "ASC")->paginate(8);
        return view('front.consulting', ['counseling_data' => $counseling_data]);
    }







    public function edit($id)
    {

        $counseling_data = counseling::select("*")->find($id);

        return view('admin.consultingEdit', ['counseling_data' => $counseling_data]);
    }

    public function update($id, UpdateCounselingRequest $request)
    {
        $datatoinsert['counseling'] = $request->filed_consulting;
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        counseling::where(['id' => $id])->update($datatoinsert);

        return redirect()->route('index.Consulting')->with(['success' => 'تم التحديث بنجاح']);
    }



    function store(AddConsultingRequest $request)
    {
        $datatoinsert['counseling'] = $request->filed_consulting;
        $datatoinsert['created_at'] = date("Y-m-d H:i:s");
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        counseling::create($datatoinsert);

        return redirect()->route('index.Consulting')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    function destroy(int $id)
    {

        counseling::findOrFail($id)->delete();

        return redirect()->route('index.Consulting')->with(['success' => 'تم الحذف بنجاح']);
    }
}
