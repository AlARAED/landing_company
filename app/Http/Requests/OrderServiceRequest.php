<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderServiceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'mob_no' => 'required',
            'category_id' => 'required',
            'details' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'email.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'mob_no.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'category_id.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'details.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',

        ];
    }
}
