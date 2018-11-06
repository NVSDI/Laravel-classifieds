<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         // By default when you generate make:request, it's FALSE. it means nobody can perform request
        // change it to TRUE, so users can submit requests
        // return false; 
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
            'title' => 'required|min:3|string',
            'description' => 'required|min:10|string',
            'img' => 'nullable | string',
        ];
    }
}
