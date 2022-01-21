<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreformsRequest extends FormRequest
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
            'form'=>'required|mimes:jpg,pdf,jpeg',
            'form_name'=>'required|unique:form,form_name',
            'category_id'=>'required'
        ];
    }
}
