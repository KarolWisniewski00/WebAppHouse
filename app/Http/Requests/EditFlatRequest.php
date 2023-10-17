<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditFlatRequest extends FormRequest
{
    public function rules()
    {
        return [
            'segment' => 'required|string|max:255',
            'flat' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'price_surface' => 'required|numeric',
            'status' => 'required|string|max:255',
            'file_pdf' => 'nullable|mimes:pdf',
            'file_priv' => 'nullable|mimes:pdf',
        ];
    }
    
}
