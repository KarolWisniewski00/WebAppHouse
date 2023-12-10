<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $table = 1;
        return view('index', compact('table'));
    }
}
