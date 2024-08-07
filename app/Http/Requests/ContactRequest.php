<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'title' => 'required|string|max:255',
            'mess' => 'required|string',
            'check1' => 'nullable',
            'check2' => 'nullable',
            'check3' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Imię jest wymagane.',
            'surname.required' => 'Nazwisko jest wymagane.',
            'email.required' => 'Adres email jest wymagany.',
            'email.email' => 'Proszę podać prawidłowy adres email.',
            'title.required' => 'Tytuł jest wymagany.',
            'mess.required' => 'Wiadomość jest wymagana.',
            'check1.accepted' => 'Musisz zaakceptować politykę informacyjną.',
            'check2.accepted' => 'Musisz wyrazić zgodę na przetwarzanie danych osobowych.',
            'check3.accepted' => 'Musisz oświadczyć, że dane są zgodne z prawdą.',
        ];
    }
}