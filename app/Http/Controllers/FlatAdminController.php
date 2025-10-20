<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlatRequest;
use App\Http\Requests\EditFlatRequest;
use App\Models\Extra;
use App\Models\Flat;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlatAdminController extends Controller
{
    public function index()
    {
        $tables = Flat::orderBy('created_at')->get();
        $storagePath = storage_path('app/public/files');
        $files = scandir($storagePath);
        $files = array_slice($files, 2);
        $extras = Extra::orderBy('created_at')->get();
        return view('dashboard', compact('tables', 'files', 'extras'));
    }
    public function flat()
    {
        $tables = Flat::orderBy('created_at')->get();
        $storagePath = storage_path('app/public/files');
        $files = scandir($storagePath);
        $files = array_slice($files, 2);
        return view('first', compact('tables', 'files'));
    }
    public function create()
    {
        $view = 1;
        return view('admin.flat.create', compact('view'));
    }
    public function store(CreateFlatRequest $request)
    {
        $file_pdf = null;
        $file_priv = null;
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
        $table->price_surface = $request->price_surface;
        $table->status = $request->status;
        $table->price = floatval(floatval($request->surface) * floatval($request->price_surface));
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
        $t = $table;
        $view = 1;
        return view('admin.flat.edit', compact('t', 'view'));
    }
    public function update(EditFlatRequest $request, Flat $table)
    {
        if (floatval(floatval($request->surface) * floatval($request->price_surface)) > $table->price) {
            ProductPrice::create([
                'flat_id' => $table->id,
                'flat2_id' => null,
                'flat3_id' => null,
                'old_price' => $table->price,
                'new_price' => $table->price,
                'changed_by' => 'admin',
            ]);
        }
        ProductPrice::create([
            'flat_id' => $table->id,
            'flat2_id' => null,
            'flat3_id' => null,
            'old_price' => $table->price,
            'new_price' => floatval(floatval($request->surface) * floatval($request->price_surface)),
            'changed_by' => 'admin',
        ]);
        $res = $table->update([
            'segment' => $request->segment,
            'flat' => $request->flat,
            'surface' => $request->surface,
            'price_surface' => $request->price_surface,
            'status' => $request->status,
            'price' => floatval(floatval($request->surface) * floatval($request->price_surface)),

        ]);
        if ($request->hasFile('file_pdf') && $request->file('file_pdf')) {
            // Sprawdź, czy istnieje stary plik i usuń go
            if ($table->file_pdf) {
                Storage::disk('public')->delete($table->file_pdf);
            }

            $file_pdf = $request->file('file_pdf');
            $file_pdf = $file_pdf->store('pdfs', 'public');
            $table->update([
                'file_pdf' => $file_pdf,
            ]);
        }
        if ($request->hasFile('file_priv') && $request->file('file_priv')) {
            // Sprawdź, czy istnieje stary plik i usuń go
            if ($table->file_priv) {
                Storage::disk('public')->delete($table->file_priv);
            }

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
                ->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
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
