<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatAdminController extends Controller
{
    public function index(){
        $tables = Flat::orderBy('created_at')->get();
        return view('dashboard', compact('tables'));
    }
    public function create()
    {
        return view('admin.flat.create');
    }
    public function store(Request $request)
    {
        $table = new Flat();
        $table->segment = $request->segment;
        $table->flat = $request->flat;
        $table->surface = $request->surface;
        $table->status = $request->status;
        $table->price = $request->price;
        $table->file_pdf = 'null';
        $table->file_priv = 'null';
        $res = $table->save();

        if ($res) {
            return redirect()->route('dashboard')->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.flat.create')->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
    public function edit(Flat $table)
    {
        return view('admin.flat.edit', compact('table'));
    }
    public function update(Request $request, Flat $table)
    {
        $res = $table->update([
            'segment' => $request->segment,
            'flat' => $request->flat,
            'surface' => $request->surface,
            'status' => $request->status,
            'price' => $request->price,
        ]);

        if ($res) {
            return redirect()->route('dashboard')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.flat.edit', $table->id)
                ->with('Fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
    public function delete(Flat $table)
    {
        $res = $table->delete();
        if ($res) {
            return redirect()->route('dashboard')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard')
                ->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
}
