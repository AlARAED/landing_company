<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyInformationRequest extends FormRequest
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
     /* 'name'=> 'required|max:255',
      'email'=> 'required|email',
      'website' => 'required',
      'linkedin' => 'required',
      'fb' => 'required',
      'google' => 'required',
      'twitter' => 'required',
      'country' => 'required',
      'no_client' => 'required',
      'satisfy_client' => 'required',
      'no_emplyee' => 'required',
      'exp_year' => 'required',
      'about_us' => 'required',
      'image' => 'required',*/

        ];
    }

    public function messages()
    {
        return [


        ];
    }



}
