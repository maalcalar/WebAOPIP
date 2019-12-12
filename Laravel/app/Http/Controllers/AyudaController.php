<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class AyudaController extends Controller
{
    public function __construct()
    {
        $this->ComunicadosController = new ComunicadosController();
    }

    public function cargarSemanasPorAno()
	{
        $validator = Validator::make(request()->all(), [
            'ano' => 'required|numeric'
        ], [
            'required' => 'El campo :attribute es obligatorio.', 
            'numeric' => 'El campo :attribute debe ser numérico.'
        ]);

        if ($validator->fails()) {
            return Response::json(['errors'=>$validator->errors()]);
        }

        $validator->validate();

        if($validator->passes())
        {
            $anio = request('ano');

            $last_day = 31; $ready = false;
            for ($last_day = 31; !$ready; $last_day--)
            {
                $fecha = $anio.'-12-'.$last_day;
                $time = strtotime($fecha);
                $last_week = date('W', $time);
                $ready = (( $last_week != '01' )? true : false );
            }

            $fecha = $anio.'-12-'.$last_day;
            $time = strtotime($fecha);
            $last_week = date('W', $time);
            $semanas = array();
            for ($i=1; $i <= intval($last_week) ; $i++)
            {
                array_push($semanas, array(
                    'semana' => $i,
                    'fecha_inicio' => date('d/m/Y', strtotime($anio.'W'.str_pad($i,2,'0',STR_PAD_LEFT))),
                    'fecha_inicio_ISO' => date('Y-m-d', strtotime($anio.'W'.str_pad($i,2,'0',STR_PAD_LEFT))),
                    'fecha_fin' => date('d/m/Y', strtotime($anio.'W'.str_pad($i,2,'0',STR_PAD_LEFT))+518400), 
                    'fecha_fin_ISO' => date('Y-m-d', strtotime($anio.'W'.str_pad($i,2,'0',STR_PAD_LEFT))+518400)
                ));
            }

            $semanas = Response::json($semanas,200);

            return $semanas;
        }
    }
    
    public function cargarComunicados()
    {
        $comunicados = $this->ComunicadosController->traerR();

        $comunicados = Response::json($comunicados,200);

        return $comunicados;
    }
}