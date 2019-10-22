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

$fontsAdmin = array(
    //array('href' => 'fonts.googleapis.CarroisGothicSC.css'), 
    //array('href' => 'font.googleapis.Raleway.css')
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

$cssAdmin = array(
    array('href' => 'admin/global/css/bootstrap.min.css'), 
    array('href' => 'admin/global/css/bootstrap-extend.min.css'), 
    array('href' => 'admin/assets/css/site.min.css'), 

    array('href' => 'admin/global/vendor/animsition/animsition.css'), 
    array('href' => 'admin/global/vendor/asscrollable/asScrollable.css'), 
    array('href' => 'admin/global/vendor/switchery/switchery.css'), 
    array('href' => 'admin/global/vendor/intro-js/introjs.css'), 
    array('href' => 'admin/global/vendor/slidepanel/slidePanel.css'), 
    array('href' => 'admin/global/vendor/flag-icon-css/flag-icon.css'), 
    array('href' => 'admin/global/vendor/waves/waves.css'), 
    array('href' => 'admin/global/vendor/chartist/chartist.css'), 
    array('href' => 'admin/global/vendor/jvectormap/jquery-jvectormap.css'), 
    array('href' => 'admin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'), 
    array('href' => 'admin/assets/examples/css/dashboard/v1.css'), 

    array('href' => 'admin/assets/examples/css/pages/login.css', 'esLogin' => true), 

    array('href' => 'admin/global/fonts/material-design/material-design.min.css'), 
    array('href' => 'admin/global/fonts/brand-icons/brand-icons.min.css'), 
    array('href' => 'admin/global/fonts/Roboto_300_400_500_italic.css')
);

$headJs = array(
    array('src' => 'jquery-1.11.1.min.js'), 
    array('src' => 'jquery-migrate-1.2.1.js'), 
    array('src' => 'jquery-ui.min.js'), 
    array('src' => 'modernizr.custom.js')
);

$headJsAdmin = array(
    array('src' => 'admin/global/vendor/breakpoints/breakpoints.js')
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

$bodyJsAdmin = array(
    //array('src' => 'bootstrap.min.js'), 
    //array('src' => 'http://maps.google.com/maps/api/js?sensor=false', 'nopre' => true), 

    array('src' => 'admin/global/vendor/babel-external-helpers/babel-external-helpers.js'), 
    array('src' => 'admin/global/vendor/jquery/jquery.js'), 
    array('src' => 'admin/global/vendor/popper-js/umd/popper.min.js'), 
    array('src' => 'admin/global/vendor/bootstrap/bootstrap.js'), 
    array('src' => 'admin/global/vendor/animsition/animsition.js'), 
    array('src' => 'admin/global/vendor/mousewheel/jquery.mousewheel.js'), 
    array('src' => 'admin/global/vendor/asscrollbar/jquery-asScrollbar.js'), 
    array('src' => 'admin/global/vendor/asscrollable/jquery-asScrollable.js'), 
    array('src' => 'admin/global/vendor/ashoverscroll/jquery-asHoverScroll.js'), 
    array('src' => 'admin/global/vendor/waves/waves.js'), 

    array('src' => 'admin/global/vendor/switchery/switchery.js'), 
    array('src' => 'admin/global/vendor/intro-js/intro.js'), 
    array('src' => 'admin/global/vendor/screenfull/screenfull.js'), 
    array('src' => 'admin/global/vendor/slidepanel/jquery-slidePanel.js'), 

    array('src' => 'admin/global/vendor/chartist/chartist.min.js', 'esIndex' = true), 
    array('src' => 'admin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js', 'esIndex' = true), 
    array('src' => 'admin/global/vendor/jvectormap/jquery-jvectormap.min.js', 'esIndex' = true), 
    array('src' => 'admin/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js', 'esIndex' = true), 
    array('src' => 'admin/global/vendor/matchheight/jquery.matchHeight-min.js', 'esIndex' = true), 
    array('src' => 'admin/global/vendor/peity/jquery.peity.min.js', 'esIndex' = true), 

    array('src' => 'admin/global/vendor/jquery-placeholder/jquery.placeholder.js', 'esLogin' = true), 

    array('src' => 'admin/global/js/Component.js'), 
    array('src' => 'admin/global/js/Plugin.js'), 
    array('src' => 'admin/global/js/Base.js'), 
    array('src' => 'admin/global/js/Config.js'), 

    array('src' => 'admin/assets/js/Section/Menubar.js'), 
    array('src' => 'admin/assets/js/Section/GridMenu.js'), 
    array('src' => 'admin/assets/js/Section/Sidebar.js'), 
    array('src' => 'admin/assets/js/Section/PageAside.js'), 
    array('src' => 'admin/assets/js/Plugin/menu.js'), 

    array('src' => 'admin/global/js/config/colors.js'), 
    array('src' => 'admin/assets/js/config/tour.js'), 

    
);

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