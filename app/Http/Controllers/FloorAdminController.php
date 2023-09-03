<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FloorAdminController extends Controller
{
    public function index()
    {
        $tables = Floor::get()->sortDesc();
        return view('admin.floor.index', compact('tables'));
    }
    public function edit(Floor $table)
    {
        return view('admin.floor.edit', compact('table'));
    }
    public function update(Request $request, Floor $table)
    {
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
            return redirect()->route('dashboard.floor')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.floor.edit', $table->id)
                ->with('Fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
}
