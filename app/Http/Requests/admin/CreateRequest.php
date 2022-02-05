<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            //
            'email' => 'unique:orders',
        ];
    }

    public function store()
    {
    $data = $request->all();
    $order = \App\Order::create($data);
    $noti='تم ارسال طلبك بنجاح!';
    $order->save();
    return back()->withErrors($noti);

    }
}
