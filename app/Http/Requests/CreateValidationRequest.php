<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            'name'=>'required|unique:cars',
            'founded'=>'required|integer|max:2022',
            'description'=>'required|max:20',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ];
    }
}
