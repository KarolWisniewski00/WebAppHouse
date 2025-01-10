<?php

namespace App\Providers;

use App\Models\Flat;
use App\Models\Floor;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $setting = Setting::get()->pluck('content', 'place');
            $view->with('setting', $setting);
        });
        View::composer('*', function ($view) {
            $floor = Floor::get();
            $view->with('floor', $floor);
        });
        View::composer('*', function ($view) {
            $floor_1 = Flat::where('segment', 'floor-1')->orderBy('created_at')->get();
            if (count($floor_1) > 0) {
                foreach($floor_1 as $f){
                    $floor_1 = false;
                    if($f->status == 'avaiable'){
                        $floor_1 = true;
                    }
                }
            } else {
                $floor_1 = false;
            }
            $view->with('floor_1', $floor_1);
        });
        View::composer('*', function ($view) {
            $floor_2 = Flat::where('segment', 'floor-2')->orderBy('created_at')->get();
            if (count($floor_2) > 0) {
                foreach($floor_2 as $f){
                    $floor_2 = false;
                    if($f->status == 'avaiable'){
                        $floor_2 = true;
                    }
                }
            } else {
                $floor_2 = false;
            }
            $view->with('floor_2', $floor_2);
        });
        View::composer('*', function ($view) {
            $floor_3 = Flat::where('segment', 'floor-3')->orderBy('created_at')->get();
            if (count($floor_3) > 0) {
                foreach($floor_3 as $f){
                    $floor_3 = false;
                    if($f->status == 'avaiable'){
                        $floor_3 = true;
                    }
                }
            } else {
                $floor_3 = false;
            }
            $view->with('floor_3', $floor_3);
        });
        View::composer('*', function ($view) {
            $floor_4 = Flat::where('segment', 'floor-4')->orderBy('created_at')->get();
            if (count($floor_4) > 0) {
                foreach($floor_4 as $f){
                    $floor_4 = false;
                    if($f->status == 'avaiable'){
                        $floor_4 = true;
                    }
                }
            } else {
                $floor_4 = false;
            }
            $view->with('floor_4', $floor_4);
        });
        View::composer('*', function ($view) {
            $table = 1;
            $view->with('table', $table);
        });
        View::composer('*', function ($view) {
            $currentTime = \Carbon\Carbon::now();
            $view->with('currentTime', $currentTime);
        });
    }
}
