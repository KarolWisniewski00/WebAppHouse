<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RodoController extends Controller
{
    public function index(){
        return view('rodo');
    }
}
