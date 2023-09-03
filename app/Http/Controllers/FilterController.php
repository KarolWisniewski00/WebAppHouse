<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function show(Request $request){
        $clicked = 'none';
        if($request->floor == 'Wybierz'){
            $tables = Flat::orderBy('created_at')->get();
        }else{
            $tables = Flat::where('segment','floor-'.$request->floor)->orderBy('created_at')->get();
            $clicked = 'floor-'.$request->floor;
        }

        if($request->room != 'Wybierz'){
            $tables_new = [];
            if(isset($request->room)){
                foreach($tables as $t){
                    if($t->flat == 'room-'.$request->room){
                        array_push($tables_new, $t);
                    }
                }
                $tables = $tables_new;
            }
        }

        if($request->from != null && $request->to != null){
            $tables_new = [];
            if(isset($request->from) && isset($request->to)){
                foreach($tables as $t){
                    if($t->surface >= $request->from && $t->surface <= $request->to){
                        array_push($tables_new, $t);
                    }
                }
                $tables = $tables_new;
            }
        }

        return view('invest.index', compact('tables','clicked'));
    }
}
