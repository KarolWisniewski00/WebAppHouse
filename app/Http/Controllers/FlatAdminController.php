<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlatRequest;
use App\Http\Requests\EditFlatRequest;
use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FlatAdminController extends Controller
{
    public function index(){
        $tables = Flat::orderBy('created_at')->paginate(30);
        return view('dashboard', compact('tables'));
    }
    public function create()
    {
        return view('admin.flat.create');
    }
    public function store(CreateFlatRequest $request)
    {
        $file_pdf=null;
        $file_priv=null;
        if ($request->hasFile('file_pdf') && $request->file('file_pdf')) {
            $file_pdf = $request->file('file_pdf');
            $file_pdf = $file_pdf->store('pdfs', 'public');
        }
        if ($request->hasFile('file_priv') && $request->file('file_priv')->isValid()) {
            $file_priv = $request->file('file_priv');
            $file_priv = $file_priv->store('privs', 'public');
        }
        
        $table = new Flat();
        $table->segment = $request->segment;
        $table->flat = $request->flat;
        $table->surface = $request->surface;
        $table->status = $request->status;
        $table->price = $request->price;
        $table->file_pdf = $file_pdf;
        $table->file_priv = $file_priv;
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
    public function update(EditFlatRequest $request, Flat $table)
    {
        $res = $table->update([
            'segment' => $request->segment,
            'flat' => $request->flat,
            'surface' => $request->surface,
            'status' => $request->status,
            'price' => $request->price,
        ]);
        if ($request->hasFile('file_pdf') && $request->file('file_pdf')) {
            $file_pdf = $request->file('file_pdf');
            $file_pdf = $file_pdf->store('pdfs', 'public');
            $table->update([
                'file_pdf' => $file_pdf,
            ]);
        }
        if ($request->hasFile('file_priv') && $request->file('file_priv')) {
            $file_priv = $request->file('file_priv');
            $file_priv = $file_priv->store('privs', 'public');
            $table->update([
                'file_priv' => $file_priv,
            ]);
        }

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
