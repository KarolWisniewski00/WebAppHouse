<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file_priv' => 'nullable|mimes:pdf',
        ];
    }
}
