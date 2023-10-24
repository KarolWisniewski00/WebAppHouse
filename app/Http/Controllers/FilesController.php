<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class FilesController extends Controller
{
    public function create()
    {
        return view('admin.files.create');
    }
    public function store(CreateFileRequest $request)
    {
        
        if ($request->hasFile('file_priv') && $request->file('file_priv')) {
            $file_priv = $request->file('file_priv');
            $file_priv->store('privs','public');
            return redirect()->route('dashboard')->with('success', 'Operacja przebiegła pomyślnie.');
        }
        return redirect()->route('dashboard.flat.create')->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
    }
    public function delete($filename)
    {
        if (Storage::disk('public')->delete('privs/' . $filename)) {
            return redirect()->route('dashboard')->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard')->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }

    public function downloadAllFiles()
    {
        $filesPath = storage_path('app/public/privs');
        $zipFileName = 'all_files.zip';

        // Tworzenie archiwum ZIP
        $zip = new ZipArchive;
        if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
            // Pobieranie listy plików w katalogu "files"
            $files = glob($filesPath . '/*');

            // Dodawanie każdego pliku do archiwum
            foreach ($files as $file) {
                $zip->addFile($file, basename($file));
            }

            $zip->close();
        }

        // Ustawienie nagłówka odpowiedzi HTTP dla pobierania archiwum
        return response()->download($zipFileName)->deleteFileAfterSend(true);
    }
}
