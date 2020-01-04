<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|min:4',
            'email' => 'required|string', 'email|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address'=> 'required|string|max:100',                        
            'city'  => 'required|string',
            'postalcode' => 'required|string',          
            'country'=> 'required|string|max:100',
            // 'descrption'=> 'required|text|max:100',            
            
        ];
    }
}
