<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'photos' => 'required'
        ];
        
 
        return $rules;
    }
}
