<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$fonts = array(
    array('href' => 'fonts.googleapis.CarroisGothicSC.css'), 
    array('href' => 'font.googleapis.Raleway.css')
);

$css = array(
    array('href' => 'bootstrap.css'), 
    array('href' => 'bootstrap-datetimepicker.min.css'), 
    array('href' => 'font-awesome.css'), 
    array('href' => 'animate.min.css'), 
    array('href' => 'style.css'), 
    array('href' => 'menu.css'), 
    array('href' => 'slicknav.css'), 
    //array('href' => 'component.css'), 
    array('href' => 'cycleslider.css'), 
    array('href' => 'colors/color17.css', 'id' => 'color')
);

$headJs = array(
    array('src' => 'jquery-1.11.1.min.js'), 
    array('src' => 'jquery-migrate-1.2.1.js'), 
    array('src' => 'jquery-ui.min.js'), 
    array('src' => 'modernizr.custom.js')
);

$bodyJs = array(
    array('src' => 'bootstrap.min.js'), 
    array('src' => 'jquery.validate.min.js'), 
    array('src' => 'bootstrap-datetimepicker.min.js'), 
    array('src' => 'jquery.scrollTo.min.js'), 
    array('src' => 'jquery.fitvids.js'), 
    array('src' => 'http://maps.google.com/maps/api/js?sensor=false', 'nopre' => true), 
    array('src' => 'jquery.slicknav.min.js'), 
    array('src' => 'jquery.nicescroll.min.js'), 
    array('src' => 'jquery.mousewheel.min.js'), 
    array('src' => 'jquery.easing.1.3.js'), 
    array('src' => 'retina-1.1.0.min.js'), 
    array('src' => 'jpreloader.min.js'), 
    //array('src' => 'classie.js'), 
    //array('src' => 'boxesFx.js'), 
    //array('src' => 'wait.js'), 
    //array('src' => 'custom_general_box.js'), 
    array('src' => 'jquery.cycle.all.js'), 
    array('src' => 'jquery.cycle2.caption2.js'), 
    array('src' => 'jquery_cycle_custom.js'), 
    array('src' => 'custom_general.js')
);

Route::redirect('/', '/Inicio', 301);

Route::view('/Inicio', 'inicio', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => true, 'idMenuBar' => 'mainheader']);

Route::view('/Nosotros', 'nosotros', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Historia', 'historia', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Mision_Vision', 'mision_vision', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Himno', 'himno', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Junta_Administracion', 'juntaAdministracion', ['fonts' => $fonts, 'styles' => array_merge($css, array(array('href' => 'portfolio_new.css'), array('href' => 'prettyPhoto.css'))), 'headJs' => $headJs, 'bodyJs' => array_merge($bodyJs, array(array('src' => 'jquery.prettyPhoto.js'), array('src' => 'jquery.mixitup.min.js'), array('src' => 'prettyphoto-custom.js'))), 'esInicio' => false, 'idMenuBar' => 'header']);
//Route::view('/Nosotros/Mas', 'nosotros_mas', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);

Route::view('/Menu', 'menu', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => true, 'idMenuBar' => 'header']);

//Route::view('/Contacto', 'contacto', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Contacto/Numeros_Anexos', 'numerosAnexos', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);