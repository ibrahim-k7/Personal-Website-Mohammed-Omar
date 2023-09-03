<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddbagRequest;
use App\Http\Requests\UpdateBagRequest;
use App\Models\bag;
use Illuminate\Http\Request;

class BagsController extends Controller
{
    
    function index()
    {

        $bag_data = bag::select("*")->orderby("id", "ASC")->get();


        return view('admin.bagsAdd', ['bag_data' => $bag_data,]);
    }

    /*  function indexContent($id)
    {

        $bag_data = bag::find($id)->content;


        return view('admin.bagContent', ['bag_data' => $bag_data,]);
    }*/

    function show()
    {
        $bag_data = bag::select("*")->orderby("id", "ASC")->get();


        return view('front.bag', ['bag_data' => $bag_data,]);
    }

    public function edit($id)
    {

        $bag_data = bag::select("*")->find($id);

        return view('admin.bagEdit', ['bag_data' => $bag_data]);
    }

    public function update($id, UpdateBagRequest $request)
    {
        $datatoinsert['name'] = $request->bagName;
        $datatoinsert['image'] = $request->bagImg;
        $datatoinsert['price'] = $request->bagPrice;

        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        bag::where(['id' => $id])->update($datatoinsert);

        return redirect()->route('index.Bag')->with(['success' => 'تم التحديث بنجاح']);
    }


    function store(AddbagRequest $request)
    {

        $datatoinsert['name'] = $request->bagName;
        $datatoinsert['price'] = $request->bagPrice;


        $datatoinsert['created_at'] = date("Y-m-d H:i:s");
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");

        if ($request->has('bagImg')) {
            $datatoinsert['image'] = upload("uploadsBag", $request->bagImg);
        }

        bag::create($datatoinsert);

        return redirect()->route('index.Bag')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    function destroy(int $id)
    {

        bag::findOrFail($id)->delete();

        return redirect()->route('index.Bag')->with(['success' => 'تم الحذف بنجاح']);
    }
}
