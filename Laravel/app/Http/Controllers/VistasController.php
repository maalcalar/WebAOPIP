<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $bodyJs = array_merge(config('global.bodyJs'), [['src' => 'reactjsControllers/indexInicio.js', 'nopre' => true, 'type' => 'text/jsx']]);

        return view('inicio', 
        ['fonts' => $fonts, 'styles' => array_merge($css, array(array('href' => 'portfolio_new.css'), array('href' => 'prettyPhoto.css'))), 'headJs' => $headJs, 'bodyJs' => array_merge($bodyJs, array(array('src' => 'jquery.prettyPhoto.js'), array('src' => 'jquery.mixitup.min.js'), array('src' => 'prettyphoto-custom.js'))), 'esInicio' => true, 'idMenuBar' => 'mainheader', 'comunicados' => $this->ComunicadosController->traerR()]);
    }

    public function adminDashboard()
    {
        $fontsAdmin = config('global.fontsAdmin');
        $cssAdmin = array_merge(config('global.cssAdmin'), [['href' => 'adminAssets/global/vendor/waves/waves.css'], ['href' => 'adminAssets/global/vendor/chartist/chartist.css'], ['href' => 'adminAssets/global/vendor/jvectormap/jquery-jvectormap.css'], ['href' => 'adminAssets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'], ['href' => 'adminAssets/assets/examples/css/dashboard/v1.css'], ['href' => 'adminAssets/global/fonts/weather-icons/weather-icons.css']]);
        $headJsAdmin = config('global.headJsAdmin');
        $bodyJsAdmin = array_merge(config('global.bodyJsAdmin'), [['src' => 'adminAssets/global/vendor/skycons/skycons.js'], ['src' => 'adminAssets/global/vendor/chartist/chartist.min.js'], ['src' => 'adminAssets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js'], ['src' => 'adminAssets/global/vendor/aspieprogress/jquery-asPieProgress.min.js'], ['src' => 'adminAssets/global/vendor/jvectormap/jquery-jvectormap.min.js'], ['src' => 'adminAssets/global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js'], ['src' => 'adminAssets/global/vendor/matchheight/jquery.matchHeight-min.js'], ['src' => 'adminAssets/global/js/Plugin/matchheight.js'], ['src' => 'adminAssets/global/js/Plugin/jvectormap.js'], ['src' => 'adminAssets/assets/examples/js/dashboard/v1.js']]);

        return view('admin.dashboard', 
        ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => $cssAdmin, 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => $bodyJsAdmin, 'esLogin' => false, 'bodyClass' => '', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;']);
    }

    public function menuCasuarinas()
    {
        $fontsAdmin = config('global.fontsAdmin');
        $cssAdmin = config('global.cssAdmin');
        $headJsAdmin = config('global.headJsAdmin');
        $bodyJsAdmin = array_merge(config('global.bodyJsAdmin'), [['src' => 'reactjsControllers/menuCasuarinas.js']]);

        return view('admin.menuCasuarinas', 
        ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => $cssAdmin, 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => $bodyJsAdmin, 'esLogin' => false, 'bodyClass' => '', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;']);
    }
}
