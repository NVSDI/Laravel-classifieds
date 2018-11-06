<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertFormRequest extends FormRequest
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
        // our form has 2 fields: title and description
        // if image is POST[] submited, validate. If not submited, validate it as nullable
        return [
            'ad_title' => 'required|min:3',
            'ad_description' => 'required|min:10',
            'img' => 'nullable | string',
        ]; 
    }


}
