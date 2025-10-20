<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\ExtraPrice;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function create()
    {
        return view('admin.extra.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        $table = new Extra();
        $table->name = $request->name;
        $table->price = $request->price;
        $res = $table->save();

        ExtraPrice::create([
            'extra_id' => $table->id,
            'old_price' => $request->price,
            'new_price' => $request->price,
            'changed_by' => 'admin',
        ]);

        if ($res) {
            return redirect()->route('dashboard')->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.extra.create')->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
    public function edit(Extra $extra)
    {
        return view('admin.extra.edit', compact('extra'));
    }
    public function update(Request $request, Extra $extra)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        if (floatval($request->price) > $extra->price) {
            ExtraPrice::create([
                'extra_id' => $extra->id,
                'old_price' => $extra->price,
                'new_price' => $extra->price,
                'changed_by' => 'admin',
            ]);
        }
        ExtraPrice::create([
            'extra_id' => $extra->id,
            'old_price' => $extra->price,
            'new_price' => $request->price,
            'changed_by' => 'admin',
        ]);

        $res = $extra->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        if ($res) {
            return redirect()->route('dashboard')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard.extra.edit', $extra->id)
                ->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
    public function delete(Extra $extra)
    {
        $res = $extra->delete();
        if ($res) {
            return redirect()->route('dashboard')
                ->with('success', 'Operacja przebiegła pomyślnie.');
        } else {
            return redirect()->route('dashboard')
                ->with('fail', 'Operacja się nie powiodła. Coś poszło nie tak.');
        }
    }
}
