<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddbagContentRequest;
use App\Http\Requests\UpdateBagContentRequest;
use App\Models\bag;
use App\Models\Bag_Content;
use Illuminate\Http\Request;

class BagContentController extends Controller
{
    public function index()
    {
        $bagContent_data = Bag_Content::with('bags')->get();


        return view('admin.bagsAdd', ['bagContent_data' => $bagContent_data,]);
    }

    /* public function indexContent($id){

        $bagContent_data =Bag_Content::where('bag_id', $id)->get();

        

        return view('admin.bagContent',['bagContent_data' => $bagContent_data]);
    }*/

    function indexContent($id)
    {

        $bag_data = bag::find($id)->content;


        return view('admin.bagContent', ['bag_data' => $bag_data,]);
    }

    public function edit($id)
    {

        $bag_content_data = Bag_Content::select("*")->find($id);

        return view('admin.bagContentEdit', ['bag_content_data' => $bag_content_data]);
    }

    public function update($id, UpdateBagContentRequest $request)
    {
        $datatoinsert['content'] = $request->filed_content;
        $datatoinsert['updated_at'] = date("Y-m-d H:i:s");


        Bag_Content::where(['id' => $id])->update($datatoinsert);

        return redirect()->route('index.Content', $request->bagId)->with(['success' => 'تم التحديث بنجاح']);
    }


    function store(AddbagContentRequest $request)
    {

        $bag = bag::findOrfail($request->bagIdForCont);

        $bag->content()->create([
            'content' => $request->content,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")

        ]);


        return redirect()->route('index.Bag')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    function destroy($id)
    {

        Bag_Content::findOrFail($id)->delete();

        return redirect()->route("index.Bag")->with(['success' => 'تم الحذف بنجاح']);
    }
}
