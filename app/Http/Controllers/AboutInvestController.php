<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutInvestController extends Controller
{
    public function index(){
        return view('invest');
    }
}
