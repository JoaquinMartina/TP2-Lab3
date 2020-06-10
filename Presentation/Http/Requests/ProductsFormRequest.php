<?php

namespace Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:256',
            'description' => 'required',
            'price' => 'required|regex:/^\d*(\.\d{2})?$/|min:1',
            'stock'=> 'required|numeric|integer|min:0'
        ];
    }
}
