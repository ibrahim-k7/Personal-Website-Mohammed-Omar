<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName'=>'required',
            'lastName'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            'messageTitle'=>'required',
            'message'=>'required',
            

        ];
    }

    public function messages()
    {
        return[
            'firstName.required'=>'اسم الاول مطلوب',
            'lastName.required'=>'اسم الاخير مطلوب',
            'phoneNumber.required'=>'رقم الهاتف مطلوب',
            'email.required'=>'البريد الالكتروني مطلوب',
            'messageTitle.required'=>'عنوان الرسالة مطلوب',
            'message.required'=>' الرسالة مطلوب',
        ];
    }
}
