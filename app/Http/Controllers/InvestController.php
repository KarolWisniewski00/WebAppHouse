<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Flat;
use App\Models\Flat2;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function index()
    {
        $tables = Flat::orderBy('created_at')->get();
        $table2 = 1;
        $extras = Extra::orderBy('created_at')->get();
        return view('invest.index', compact('tables', 'table2', 'extras'));
    }
    public function indexSecond()
    {
        $tables = Flat2::orderBy('created_at')->get();
        $table2 = 2;
        $extras = Extra::orderBy('created_at')->get();
        return view('invest.index', compact('tables', 'table2', 'extras'));
    }
    public function show($slug)
    {
        $t = Flat::where('id', $slug)->first();
        $table2 = 1;
        $extras = Extra::orderBy('created_at')->get();
        return view('invest.show', compact('slug', 't', 'table2', 'extras'));
    }
    public function showSecond($slug)
    {
        $t = Flat2::where('id', $slug)->first();
        $table2 = 2;
        $extras = Extra::orderBy('created_at')->get();
        return view('invest.show', compact('slug', 't', 'table2', 'extras'));
    }
}
