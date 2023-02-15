<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashsboardExample;

class DashsboardExampleController extends Controller
{
    

    /*
    |--------------------------------------------------------------------------
    | GetDataDashboard()
    |--------------------------------------------------------------------------
    | Obtiene todos los datos de la tabla dashboardexample
    */
    public function GetDataDashboard(){
        $dashboardexample = DashsboardExample::all();
        return view('contenido.dasboardexample1', array('dahsExampleInfo1'=>$dashboardexample));
    }


    /*
    |--------------------------------------------------------------------------
    | GetDataForDate($date)
    |--------------------------------------------------------------------------
    | Obtiene todos los datos de la tabla dashboardexample de una fecha
    */
    public function GetDataForDate($fechaInicio, $fechaFin){
        $dashboardexample = DashsboardExample::select('SELECT * FROM dashboardexample WHERE staralarm BETWEEN ? AND ?');
        return view('contenido.dasboardexample1', array('dahsExampleInfo2'=>$dashboardexample));
    }


}
