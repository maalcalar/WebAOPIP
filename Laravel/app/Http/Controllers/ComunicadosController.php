<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ComunicadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'sesionCerrada']);
    }

    public function sesionCerrada()
    {
        return redirect()
            ->route('loginview')
            ->withErrors(['session' => 'Su sesión ha caducado.']);
    }

    public function view()
    {
        $fontsAdmin = config('global.fontsAdmin');
        $cssAdmin = config('global.cssAdmin');
        $headJsAdmin = config('global.headJsAdmin');
        $bodyJsAdmin = config('global.bodyJsAdmin');

        return view('admin.comunicados', ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => array_merge($cssAdmin, array(array('href' => 'adminAssets/global/vendor/summernote/summernote.css'), array('href' => 'adminAssets/global/vendor/alertify/alertify.css'), array('href' => 'adminAssets/global/vendor/notie/notie.css'), array('href' => 'adminAssets/assets/examples/css/advanced/alertify.css'))), 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => array_merge($bodyJsAdmin, array(array('src' => 'adminAssets/global/vendor/summernote/summernote.min.js'), array('src' => 'adminAssets/global/js/Plugin/summernote.js'), array('src' => 'adminAssets/assets/examples/js/forms/editor-summernote.js'), array('src' => 'adminAssets/global/js/Plugin/jquery-placeholder.js'), array('src' => 'adminAssets/global/js/Plugin/material.js'), array('src' => 'adminAssets/global/vendor/asprogress/jquery-asProgress.js'), array('src' => 'adminAssets/global/vendor/draggabilly/draggabilly.pkgd.js'), array('src' => 'adminAssets/global/vendor/raty/jquery.raty.js'), array('src' => 'adminAssets/global/js/Plugin/responsive-tabs.js'), array('src' => 'adminAssets/global/js/Plugin/tabs.js'), array('src' => 'adminAssets/global/js/Plugin/asprogress.js'), array('src' => 'adminAssets/global/js/Plugin/panel.js'), array('src' => 'adminAssets/global/js/Plugin/asscrollable.js'), array('src' => 'adminAssets/global/js/Plugin/raty.js'), array('src' => 'adminAssets/assets/examples/js/uikit/panel-structure.js'), array('src' => 'adminAssets/global/vendor/alertify/alertify.js'), array('src' => 'adminAssets/global/vendor/notie/notie.js'), array('src' => 'adminAssets/global/js/Plugin/alertify.js'), array('src' => 'adminAssets/global/js/Plugin/notie-js.js'))), 'esLogin' => false, 'bodyClass' => 'dashboard', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;', 'comunicados' => $this->traerR() ]);
    }

    public function insertar()
    {
        $validator = Validator::make(request()->all(), [
            'titulo' => 'required|string', 
            'texto' => 'required|string'
        ], [
            'required' => 'El campo :attribute es obligatorio.'
        ]);

        $validator->validate();

        if($validator->passes())
        {
            $id = DB::table('tb_comunicados')->insertGetId(
                ['titulo' => request('titulo'), 'texto' => request('texto')]
            );
    
            if($id)
            {
                DB::table('tb_logs_comunicados')->insert(
                    ['tipo_hito_log' => 1, 'valores' => json_encode(array('titulo' => request('titulo'), 'texto' => request('texto'))), 'user' => Auth::user()->id]
                );
            }

            return $id;
        }
    }

    public function traer()
    {
        $comunicados = DB::table('tb_comunicados')->where('eliminado', 0)->get();

        return $comunicados;
    }

    public function traerR()
    {
        $comunicados = DB::table('tb_comunicados')->where('eliminado', 0)->orderBy('id', 'desc')->get();

        return $comunicados;
    }
}
