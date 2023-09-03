<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddbagRequest extends FormRequest
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
            'bagName'=>'required',
            'bagImg'=>'required|max:1024|mimes:png,jpg,jpeg',
            'bagPrice'=>'required',
            

        ];
    }

    public function messages()
    {
        return[
            'bagName.required'=>'اسم الحقيبة مطلوب',
            'bagImg.required'=>'صورة الحقيبة مطلوبة',
            'bagPrice.required'=>'السعر مطلوب',
        ];
    }
}
