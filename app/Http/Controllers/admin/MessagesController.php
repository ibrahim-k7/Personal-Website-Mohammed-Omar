<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function index()
    {
        $message_data = Message::select("*")->orderby("id", "ASC")->get();
        return view('admin.message', ['message_data' => $message_data]);
    }





    function store(AddMessageRequest $request)
    {
        $datatoinsert['first_name']=$request->firstName;
        $datatoinsert['last_name']=$request->lastName;
        $datatoinsert['number']=$request->phoneNumber;
        $datatoinsert['email']=$request->email;
        $datatoinsert['message_title']=$request->messageTitle;
        $datatoinsert['message']=$request->message;
        $datatoinsert['created_at']=date("Y-m-d H:i:s");
        

        Message::create($datatoinsert);

        return back()->with(['success'=>'تم ارسال رسالتك بنجاح']);

    }

    function destroy(int $id)
    {

        Message::findOrFail($id)->delete();

        return redirect()->route('index.Message')->with(['success' => 'تم الحذف بنجاح']);
    }
}
