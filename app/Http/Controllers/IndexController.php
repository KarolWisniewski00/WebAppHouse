<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        if (session()->has('banner')) {
            $banner = false;
        } else {
            session(['banner' => true]);
            $banner = true;
        }

        $table2 = 1;
        $settings = Setting::all();
        $isModule = false;
        $isEnding = false;
        $isBanner = false;
        $isBannerPhoto = false;
        foreach ($settings as $key => $value) {
            if ($value->place == 'moduldzwonienie') {
                $isModule = true;
            }
            if ($value->place == 'wykonczenia') {
                $isEnding = true;
            }
            if ($value->place == 'banner') {
                $isBanner = true;
            }
            if ($value->place == 'banner_photo') {
                $isBannerPhoto = true;
            }
        }
        if ($isModule == false) {
            $setting = new Setting();
            $setting->place = 'moduldzwonienie';
            $setting->type = 'text';
            $setting->content = 'on';
            $res = $setting->save();
        }
        if ($isEnding == false) {
            $setting = new Setting();
            $setting->place = 'wykonczenia';
            $setting->type = 'text';
            $setting->content = 'on';
            $res = $setting->save();
        }
        if ($isBanner == false) {
            $setting = new Setting();
            $setting->place = 'banner';
            $setting->type = 'text';
            $setting->content = 'off';
            $res = $setting->save();
        }
        if ($isBannerPhoto == false) {
            $setting = new Setting();
            $setting->place = 'banner_photo';
            $setting->type = 'photo';
            $setting->content = '';
            $res = $setting->save();
        }
        return view('index', compact('table2', 'banner'));
    }
}
