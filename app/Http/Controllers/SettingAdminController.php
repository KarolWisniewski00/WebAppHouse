<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingAdminController extends Controller
{
    public function index()
    {
        $tables = Setting::paginate(30);
        return view('admin.setting.index', compact('tables'));
    }
    public function edit(Setting $table)
    {
        return view('admin.setting.edit', compact('table'));
    }
    public function photo(Setting $table)
    {
        return view('admin.setting.photo', compact('table'));
    }
    public function update(Request $request, Setting $table)
    {
        $res = $table->update([
            'content' => $request->content,
        ]);

        if ($res) {
            return redirect()->route('dashboard.setting')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.setting.edit', $table->id)
                ->with('Fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
    public function upload(Request $request, Setting $table)
    {
        $photoFilePath = public_path('asset/photo/' . $table->content);
        if (File::exists($photoFilePath)) {
            File::delete($photoFilePath);
        }

        $file = $request->file('content');
        $fileName = time() . rand(1, 100) . '.' . $file->extension();
        $file->move(public_path('asset/photo'), $fileName);

        $res = $table->update([
            'content' => $fileName,
        ]);

        if ($res) {
            return redirect()->route('dashboard.setting')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.setting.edit', $table->id)
                ->with('Fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
        /*
         interaktywne zdjecie + wyszukiwarka formularz kontaktowy
        */
    }

    public function pin(Request $request) {
        $pin = $request->input('pin');
        $password = Setting::where('type', 'pin')->first();
    
        if ($pin == $password->content) {
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false]);
    }
    
}
