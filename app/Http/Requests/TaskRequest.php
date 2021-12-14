<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'description'=>'required',
            'id_category'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Coloque a descrição.',
            'id_category.required'  => 'Escolha a categoria.',
            'id_category.numeric'  => 'Escolha a categoria.',
        ];
    }
}
