<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestEndController extends Controller
{
    public function dlugosza(){
        return view('invest.dlugosza.index');
    }
    public function wodna(){
        return view('invest.wodna.index');
    }
    public function kopernika(){
        return view('invest.kopernika.index');
    }
}
