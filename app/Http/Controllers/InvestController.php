<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function index()
    {
        $tables = Flat::orderBy('created_at')->get();
        return view('invest.index', compact('tables'));
    }
    public function show($slug)
    {
        $table = Flat::where('id',$slug)->first();
        return view('invest.show', compact('slug','table'));
    }
}
