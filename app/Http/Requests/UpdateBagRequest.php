<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBagRequest extends FormRequest
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
            'bagImg'=>'required',
            'bagPrice'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'bagName.required'=>'اسم الحقيبة مطلوب',
            'bagImg.required'=>'صورة الحقيبة مطلوب',
            'bagPrice.required'=>'سعر الحقيبة مطلوب',
        ];
    }
}
