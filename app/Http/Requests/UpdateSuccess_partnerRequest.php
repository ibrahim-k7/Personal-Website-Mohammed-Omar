<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuccess_partnerRequest extends FormRequest
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
            'client'=>'required',
            'details'=>'required',
            'image_01'=>'max:1024|mimes:png,jpg,jpeg',
            'image_02'=>'max:1024|mimes:png,jpg,jpeg',
            'image_03'=>'max:1024|mimes:png,jpg,jpeg',
            'image_04'=>'max:1024|mimes:png,jpg,jpeg',
            'image_05'=>'max:1024|mimes:png,jpg,jpeg',
            'image_06'=>'max:1024|mimes:png,jpg,jpeg',

        ];
    }

    public function messages()
    {
        return[
            'client.required'=>'اسم الجهه مطلوب',
            'details.required'=>'التفاصيل  مطلوبة',
        ];
    }
}
