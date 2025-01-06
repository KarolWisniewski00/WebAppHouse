<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallContactRequest;
use App\Http\Requests\ContactRequest;
use App\Mail\CallContactFormMail;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
        Mail::to('sprzedazdgg@gmail.com')->send(new ContactFormMail($request->all()));
        return redirect()->back()->with('success',  'Pomyślnie wysłano wiadomość');
    }
    public function call_store(CallContactRequest $request)
    {
        Mail::to('sprzedazdgg@gmail.com')->send(new CallContactFormMail($request->all()));
        return redirect()->back()->with('success',  'Pomyślnie wysłano wiadomość');
    }
}
