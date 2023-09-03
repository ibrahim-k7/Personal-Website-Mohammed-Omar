<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddbagContentRequest extends FormRequest
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
            'bagIdForCont'=>'required',
            'content'=>'required',
            

        ];
    }

    public function messages()
    {
        return[
            'bagIdForCont.required'=>'معرف الحقيبة مطلوب',
            'content.required'=>'محتوى الحقيبة مطلوبة',
        ];
    }
}
