<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
            'name'=>'bail|required|',
            'message'=>'bail|required|'
            'latitude'=>'bail|required|'
            'longitude'=>'bail|required|'
        ];
    }

     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     public function messages()
    {
        return [
            'name.required'=>'Please, enter your full name',
            'message.required'=>'Please, enter  your message'
            'latitude.required'=>'Please, specify the latitude'
            'longitude.required'=>'Please, specify the longitude'
        ];
    }
}
