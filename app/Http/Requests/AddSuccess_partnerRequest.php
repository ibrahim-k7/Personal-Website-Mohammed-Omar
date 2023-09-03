<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSuccess_partnerRequest extends FormRequest
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
            'image_01'=>'required|max:1024|mimes:png,jpg,jpeg',
            'image_02'=>'required|max:1024|mimes:png,jpg,jpeg',
            'image_03'=>'required|max:1024|mimes:png,jpg,jpeg',
            'image_04'=>'required|max:1024|mimes:png,jpg,jpeg',
            'image_05'=>'required|max:1024|mimes:png,jpg,jpeg',
            'image_06'=>'required|max:1024|mimes:png,jpg,jpeg',

        ];
    }

    public function messages()
    {
        return[
            'client.required'=>'اسم الجهه مطلوب',
            'details.required'=>'التفاصيل  مطلوبة',
            'image_01.required'=>' صورة 1 مطلوبة',
            'image_02.required'=>'صورة 2 مطلوبة',
            'image_03.required'=>'صورة 3 مطلوبة',
            'image_04.required'=>'صورة 4 مطلوبة',
            'image_05.required'=>'صورة 5 مطلوبة',
            'image_06.required'=>'صورة 6 مطلوبة',
        ];
    }
}
