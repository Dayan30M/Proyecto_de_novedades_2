<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novedad;
use Illuminate\Support\Facades\DB;

class BarchartController extends Controller
{
    public function barChart(){
        $novedads =Novedad::select(DB::raw("COUNT(*) as count"))
            ->wherenom_novedad('nom_novedad',date('Y'))
            ->groupBy(DB::raw('Month(nom_novedad)'))
            ->pluck('count');

        $months=Novedad::select(DB::raw('Month(nom_novedad)as month'))
            ->wherenom_novedad('nom_novedad',date('Y'))
            ->groupBy(DB::raw('Month(nom_novedad)'))
            ->pluck('month'); 

        $datas = array(0,0,0,0,0,0,0);
        foreach ($months as $barChart => $month) {
            $datas[$month-1] = $novedads[$barChart];
        }

        return view ('barchart',compact('datas'));
        
    }
    }

