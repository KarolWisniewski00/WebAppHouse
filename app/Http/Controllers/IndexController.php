<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $table2 = 1;
        $settings = Setting::all();
        $isModule = false;
        foreach ($settings as $key => $value) {
            if ($value->place == 'moduldzwonienie') {
                $isModule = true;
            }
        }
        if($isModule == false){
            $setting = new Setting();
            $setting->place = 'moduldzwonienie';
            $setting->type = 'text';
            $setting->content = 'on';
            $res = $setting->save();
        }
        return view('index', compact('table2'));
    }
}
