<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $table2 = 1;
        return view('about', compact('table2'));
    }
}
