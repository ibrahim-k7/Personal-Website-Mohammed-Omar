<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCourseGoalRequest extends FormRequest
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
            'courseIdForGoal'=>'required',
            'goal'=>'required',
            

        ];
    }

    public function messages()
    {
        return[
            'courseIdForGoal.required'=>'معرف الدورة مطلوب',
            'goal.required'=>'هدف الدورة مطلوبة',
        ];
    }
}
