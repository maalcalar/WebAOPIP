<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

//use App\Http\Controllers\Controller\ComunicadosController;

class VistasController extends Controller
{
    protected $ComunicadosController;

    public function __construct()
    {
        $this->ComunicadosController = new ComunicadosController();
    }

    public function inicio()
    {
        $fonts = config('global.fonts');
        $css = config('global.css');
        $headJs = config('global.headJs');
        $bodyJs = config('global.bodyJs');

        return view('inicio', 
        ['fonts' => $fonts, 'styles' => array_merge($css, array(array('href' => 'portfolio_new.css'), array('href' => 'prettyPhoto.css'))), 'headJs' => $headJs, 'bodyJs' => array_merge($bodyJs, array(array('src' => 'jquery.prettyPhoto.js'), array('src' => 'jquery.mixitup.min.js'), array('src' => 'prettyphoto-custom.js'))), 'esInicio' => true, 'idMenuBar' => 'mainheader', 'comunicados' => $this->ComunicadosController->traerR()]);
    }
}
