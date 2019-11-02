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
$fonts = config('global.fonts');

$fontsAdmin = config('global.fontsAdmin');

$css = config('global.css');

$cssAdmin = config('global.cssAdmin');

$headJs = config('global.headJs');

$headJsAdmin = config('global.headJsAdmin');

$bodyJs = config('global.bodyJs');

$bodyJsAdmin = config('global.bodyJsAdmin');

// Pagina web
// ----------

Route::redirect('/', '/Inicio', 301);

Route::view('/Inicio', 'inicio', ['fonts' => $fonts, 'styles' => array_merge($css, array(array('href' => 'portfolio_new.css'), array('href' => 'prettyPhoto.css'))), 'headJs' => $headJs, 'bodyJs' => array_merge($bodyJs, array(array('src' => 'jquery.prettyPhoto.js'), array('src' => 'jquery.mixitup.min.js'), array('src' => 'prettyphoto-custom.js'))), 'esInicio' => true, 'idMenuBar' => 'mainheader']);

Route::view('/Nosotros', 'nosotros', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Historia', 'historia', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Mision_Vision', 'mision_vision', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Himno', 'himno', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Nosotros/Junta_Administracion', 'juntaAdministracion', ['fonts' => $fonts, 'styles' => array_merge($css, array(array('href' => 'portfolio_new.css'), array('href' => 'prettyPhoto.css'))), 'headJs' => $headJs, 'bodyJs' => array_merge($bodyJs, array(array('src' => 'jquery.prettyPhoto.js'), array('src' => 'jquery.mixitup.min.js'), array('src' => 'prettyphoto-custom.js'))), 'esInicio' => false, 'idMenuBar' => 'header']);
//Route::view('/Nosotros/Mas', 'nosotros_mas', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);

Route::view('/Menu', 'menu', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => true, 'idMenuBar' => 'header']);

//Route::view('/Contacto', 'contacto', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);
Route::view('/Contacto/Numeros_Anexos', 'numerosAnexos', ['fonts' => $fonts, 'styles' => $css, 'headJs' => $headJs, 'bodyJs' => $bodyJs, 'esInicio' => false, 'idMenuBar' => 'header']);

// Vista de administracion
// -----------------------

Route::get('/admin', 'Auth\LoginController@showLogin');
Route::view('/admin/login', 'admin/login', ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => $cssAdmin, 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => $bodyJsAdmin, 'esLogin' => true, 'bodyClass' => 'page-login layout-full page-dark', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;'])->name('loginview');
Route::view('/admin/dashboard', 'admin/dashboard', ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => $cssAdmin, 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => $bodyJsAdmin, 'esLogin' => false, 'bodyClass' => 'dashboard', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;'])->middleware('auth')->name('/admin/dashboard');
//Route::view('/admin/comunicados', 'admin/comunicados', ['fontsAdmin' => $fontsAdmin, 'stylesAdmin' => array_merge($cssAdmin, array(array('href' => 'adminAssets/global/vendor/summernote/summernote.css'), array('href' => 'adminAssets/global/vendor/alertify/alertify.css'), array('href' => 'adminAssets/global/vendor/notie/notie.css'), array('href' => 'adminAssets/assets/examples/css/advanced/alertify.css'))), 'headJsAdmin' => $headJsAdmin, 'bodyJsAdmin' => array_merge($bodyJsAdmin, array(array('src' => 'adminAssets/global/vendor/summernote/summernote.min.js'), array('src' => 'adminAssets/global/js/Plugin/summernote.js'), array('src' => 'adminAssets/assets/examples/js/forms/editor-summernote.js'), array('src' => 'adminAssets/global/js/Plugin/jquery-placeholder.js'), array('src' => 'adminAssets/global/js/Plugin/material.js'), array('src' => 'adminAssets/global/vendor/asprogress/jquery-asProgress.js'), array('src' => 'adminAssets/global/vendor/draggabilly/draggabilly.pkgd.js'), array('src' => 'adminAssets/global/vendor/raty/jquery.raty.js'), array('src' => 'adminAssets/global/js/Plugin/responsive-tabs.js'), array('src' => 'adminAssets/global/js/Plugin/tabs.js'), array('src' => 'adminAssets/global/js/Plugin/asprogress.js'), array('src' => 'adminAssets/global/js/Plugin/panel.js'), array('src' => 'adminAssets/global/js/Plugin/asscrollable.js'), array('src' => 'adminAssets/global/js/Plugin/raty.js'), array('src' => 'adminAssets/assets/examples/js/uikit/panel-structure.js'), array('src' => 'adminAssets/global/vendor/alertify/alertify.js'), array('src' => 'adminAssets/global/vendor/notie/notie.js'), array('src' => 'adminAssets/global/js/Plugin/alertify.js'), array('src' => 'adminAssets/global/js/Plugin/notie-js.js'))), 'esLogin' => false, 'bodyClass' => 'dashboard', 'bodyStyle' => 'animation-duration: 800ms; opacity: 1;'])->middleware('auth')->name('/admin/comunicados');
Route::get('/admin/comunicados', 'ComunicadosController@view')->name('/admin/comunicados');

// Servicios
// ---------

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('insertarComunicados', 'ComunicadosController@insertar')->name('insertarComunicados');
Route::post('traerComunicados', 'ComunicadosController@traer')->name('traerComunicados');
Route::post('traerRComunicados', 'ComunicadosController@traerR')->name('traerRComunicados');
Route::post('actualizarComunicados', 'ComunicadosController@actualizar')->name('actualizarComunicados');
Route::post('deshabilitarComunicados', 'ComunicadosController@deshabilitar')->name('deshabilitarComunicados');
Route::post('eliminarComunicados', 'ComunicadosController@eliminar')->name('eliminarComunicados');