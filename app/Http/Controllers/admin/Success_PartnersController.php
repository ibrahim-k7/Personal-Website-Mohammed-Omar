<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSuccess_partnerRequest;
use App\Http\Requests\UpdateSuccess_partnerRequest;
use App\Models\Success_partner;
use Illuminate\Http\Request;

class Success_PartnersController extends Controller
{


    function index()
    {
        $success_partner_data = Success_partner::select("*")->orderby("id", "ASC")->get();

        return view('admin.success_partnersAdd', ['success_partner_data' => $success_partner_data]);
    }

    function show()
    {
        $success_partner_data = Success_partner::select("*")->orderby("id", "ASC")->get();
        return view('front.success_partners', ['success_partner_data' => $success_partner_data]);
    }







    public function edit($id)
    {

        $success_partner_data = Success_partner::select("*")->find($id);

        return view('admin.success_partnersEdit', ['success_partner_data' => $success_partner_data]);
    }

    public function update($id, UpdateSuccess_partnerRequest $request)
    {
        $datatoinsert['client'] = $request->client;
        $datatoinsert['details'] = $request->details;
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");





        if ($request->has('image_01')) {
            $datatoinsert['image_01'] = upload("uploadsSuccess_partner", $request->image_01);
        }

        if ($request->has('image_02')) {
            $datatoinsert['image_02'] = upload("uploadsSuccess_partner", $request->image_02);
        }
        if ($request->has('image_03')) {
            $datatoinsert['image_03'] = upload("uploadsSuccess_partner", $request->image_03);
        }

        if ($request->has('image_04')) {
            $datatoinsert['image_04'] = upload("uploadsSuccess_partner", $request->image_04);
        }

        if ($request->has('image_05')) {
            $datatoinsert['image_05'] = upload("uploadsSuccess_partner", $request->image_05);
        }

        if ($request->has('image_06')) {
            $datatoinsert['image_06'] = upload("uploadsSuccess_partner", $request->image_06);
        }


        Success_partner::where(['id' => $id])->update($datatoinsert);

        return redirect()->route('index.Success_partners')->with(['success' => 'تم التحديث بنجاح']);
    }



    function store(AddSuccess_partnerRequest $request)
    {
        $datatoinsert['client'] = $request->client;
        $datatoinsert['details'] = $request->details;



        $datatoinsert['created_at'] = date("Y-m-d H:i:s");
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        if ($request->has('image_01')) {
            $datatoinsert['image_01'] = upload("uploadsSuccess_partner", $request->image_01);
        }

        if ($request->has('image_02')) {
            $datatoinsert['image_02'] = upload("uploadsSuccess_partner", $request->image_02);
        }
        if ($request->has('image_03')) {
            $datatoinsert['image_03'] = upload("uploadsSuccess_partner", $request->image_03);
        }

        if ($request->has('image_04')) {
            $datatoinsert['image_04'] = upload("uploadsSuccess_partner", $request->image_04);
        }

        if ($request->has('image_05')) {
            $datatoinsert['image_05'] = upload("uploadsSuccess_partner", $request->image_05);
        }

        if ($request->has('image_06')) {
            $datatoinsert['image_06'] = upload("uploadsSuccess_partner", $request->image_06);
        }

        Success_partner::create($datatoinsert);

        return redirect()->route('index.Success_partners')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    function destroy(int $id)
    {

        Success_partner::findOrFail($id)->delete();

        return redirect()->route('index.Success_partners')->with(['success' => 'تم الحذف بنجاح']);
    }
}
