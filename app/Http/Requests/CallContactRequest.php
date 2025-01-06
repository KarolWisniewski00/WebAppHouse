<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Pole :attribute jest wymagane.',
            'email' => 'Pole :attribute musi być prawidłowym adresem e-mail.',
            'regex' => 'Format pola :attribute jest nieprawidłowy.',
        ];
    }    
}