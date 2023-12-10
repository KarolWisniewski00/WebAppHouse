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
        $table = 1;
        return view('invest.index', compact('tables', 'table'));
    }
    public function indexSecond()
    {
        $tables = Flat2::orderBy('created_at')->get();
        $table = 2;
        return view('invest.index', compact('tables', 'table'));
    }
    public function show($slug)
    {
        $t = Flat::where('id', $slug)->first();
        $table = 1;
        return view('invest.show', compact('slug', 't', 'table'));
    }
    public function showSecond($slug)
    {
        $t = Flat2::where('id', $slug)->first();
        $table = 2;
        return view('invest.show', compact('slug', 't', 'table'));
    }
}
