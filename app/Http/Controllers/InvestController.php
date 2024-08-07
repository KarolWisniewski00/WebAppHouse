<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Flat2;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function index()
    {
        $tables = Flat::orderBy('created_at')->get();
        $table2 = 1;
        return view('invest.index', compact('tables', 'table2'));
    }
    public function indexSecond()
    {
        $tables = Flat2::orderBy('created_at')->get();
        $table2 = 2;
        return view('invest.index', compact('tables', 'table2'));
    }
    public function show($slug)
    {
        $t = Flat::where('id', $slug)->first();
        $table2 = 1;
        return view('invest.show', compact('slug', 't', 'table2'));
    }
    public function showSecond($slug)
    {
        $t = Flat2::where('id', $slug)->first();
        $table2 = 2;
        return view('invest.show', compact('slug', 't', 'table2'));
    }
}
