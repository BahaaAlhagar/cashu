<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class HotelSearchRequest extends FormRequest
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
            'from'  =>  'required|date|before_or_equal:to',
            'to'  =>  'required|date|after_or_equal:from',
            'city'  =>  'required|string',
            'adults_count'  =>  'required|integer|min:1',
        ];
    }
}
