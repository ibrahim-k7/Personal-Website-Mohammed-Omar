<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCourseRequest extends FormRequest
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
            'courseName'=>'required',
            'courseTime'=>'required',
            'coursePres'=>'required',
            'coursePlace'=>'required',
            'coursePrice'=>'required',
            

        ];
    }

    public function messages()
    {
        return[
            'courseName.required'=>'اسم الدورة مطلوب',
            'courseTime.required'=>'مدة الدورة مطلوبة',
            'coursePres.required'=>'محاضر الدورة مطلوب',
            'coursePlace.required'=>'مكان الدورة مطلوب',
            'coursePrice.required'=>'سعر الدورة مطلوب',
        ];
    }
}
