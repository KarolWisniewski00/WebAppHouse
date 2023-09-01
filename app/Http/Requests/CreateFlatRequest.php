<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFlatRequest extends FormRequest
{
    public function rules()
    {
        return [
            'segment' => 'required|string|max:255',
            'flat' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'status' => 'required|string|max:255',
            'price' => 'required|numeric',
            'file_pdf' => 'required|mimes:pdf',
            'file_priv' => 'required|mimes:pdf',
        ];
    }
    
}
