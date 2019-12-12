<?php
return [
    'fonts' => array(
        array('href' => 'fonts.googleapis.CarroisGothicSC.css'), 
        array('href' => 'font.googleapis.Raleway.css')
    ),
    
    'fontsAdmin' => array(),
    
    'css' => array(
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
    ),
    
    'cssAdmin' => array(
        array('href' => 'adminAssets/global/css/bootstrap.min.css'), 
        array('href' => 'adminAssets/global/css/bootstrap-extend.min.css'), 
        array('href' => 'adminAssets/assets/css/site.min.css'), 
    
        array('href' => 'adminAssets/global/vendor/animsition/animsition.css'), 
        array('href' => 'adminAssets/global/vendor/asscrollable/asScrollable.css'), 
        array('href' => 'adminAssets/global/vendor/switchery/switchery.css'), 
        array('href' => 'adminAssets/global/vendor/intro-js/introjs.css'), 
        array('href' => 'adminAssets/global/vendor/slidepanel/slidePanel.css'), 
        array('href' => 'adminAssets/global/vendor/flag-icon-css/flag-icon.css'), 
        /*array('href' => 'adminAssets/global/vendor/waves/waves.css', 'esLogin' => false), 
        array('href' => 'adminAssets/global/vendor/chartist/chartist.css', 'esLogin' => false), 
        array('href' => 'adminAssets/global/vendor/jvectormap/jquery-jvectormap.css', 'esLogin' => false), 
        array('href' => 'adminAssets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css', 'esLogin' => false), 
        array('href' => 'adminAssets/assets/examples/css/dashboard/v1.css', 'esLogin' => false), */
    
        array('href' => 'adminAssets/assets/examples/css/pages/login.css', 'esLogin' => true), 
    
        /*array('href' => 'adminAssets/global/fonts/weather-icons/weather-icons.css', 'esLogin' => false), */
        array('href' => 'adminAssets/global/fonts/web-icons/web-icons.min.css'), 
        array('href' => 'adminAssets/global/fonts/brand-icons/brand-icons.min.css'), 
        array('href' => 'adminAssets/global/fonts/Roboto_300_400_500_italic.css')
    ),
    
    'headJs' => array(
        array('src' => 'jquery-1.11.1.min.js'), 
        array('src' => 'jquery-migrate-1.2.1.js'), 
        array('src' => 'jquery-ui.min.js'), 
        array('src' => 'modernizr.custom.js')
    ),
    
    'headJsAdmin' => array(
        array('src' => 'adminAssets/global/vendor/breakpoints/breakpoints.js')
    ),
    
    'bodyJs' => array(
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
        array('src' => 'custom_general.js'),

        array('src' => 'js/react.development.js', 'crossorigin' => true, 'nopre' => true), 
        array('src' => 'js/react-dom.development.js', 'crossorigin' => true, 'nopre' => true), 
        array('src' => 'babel.min.js'), 
    ),
    
    'bodyJsAdmin' => array(
        //array('src' => 'bootstrap.min.js'), 
        //array('src' => 'http://maps.google.com/maps/api/js?sensor=false', 'nopre' => true), 
    
        array('src' => 'adminAssets/global/vendor/babel-external-helpers/babel-external-helpers.js'), 
        array('src' => 'adminAssets/global/vendor/jquery/jquery.js'), 
        array('src' => 'adminAssets/global/vendor/popper-js/umd/popper.min.js'), 
        array('src' => 'adminAssets/global/vendor/bootstrap/bootstrap.js'), 
        array('src' => 'adminAssets/global/vendor/animsition/animsition.js'), 
        array('src' => 'adminAssets/global/vendor/mousewheel/jquery.mousewheel.js'), 
        array('src' => 'adminAssets/global/vendor/asscrollbar/jquery-asScrollbar.js'), 
        array('src' => 'adminAssets/global/vendor/asscrollable/jquery-asScrollable.js'), 
        array('src' => 'adminAssets/global/vendor/ashoverscroll/jquery-asHoverScroll.js'), 
        //array('src' => 'adminAssets/global/vendor/waves/waves.js'), 
    
        array('src' => 'adminAssets/global/vendor/switchery/switchery.js'), 
        array('src' => 'adminAssets/global/vendor/intro-js/intro.js'), 
        array('src' => 'adminAssets/global/vendor/screenfull/screenfull.js'), 
        array('src' => 'adminAssets/global/vendor/slidepanel/jquery-slidePanel.js'), 
    
        /*array('src' => 'adminAssets/global/vendor/skycons/skycons.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/chartist/chartist.min.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/aspieprogress/jquery-asPieProgress.min.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/jvectormap/jquery-jvectormap.min.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/vendor/matchheight/jquery.matchHeight-min.js', 'esLogin' => false), */
    
        array('src' => 'adminAssets/global/vendor/jquery-placeholder/jquery.placeholder.js', 'esLogin' => true), 
    
        array('src' => 'adminAssets/global/js/Component.js'), 
        array('src' => 'adminAssets/global/js/Plugin.js'), 
        array('src' => 'adminAssets/global/js/Base.js'), 
        array('src' => 'adminAssets/global/js/Config.js'), 
    
        array('src' => 'adminAssets/assets/js/Section/Menubar.js'), 
        array('src' => 'adminAssets/assets/js/Section/GridMenu.js'), 
        array('src' => 'adminAssets/assets/js/Section/Sidebar.js'), 
        array('src' => 'adminAssets/assets/js/Section/PageAside.js'), 
        array('src' => 'adminAssets/assets/js/Plugin/menu.js'), 
    
        array('src' => 'adminAssets/global/js/config/colors.js'), 
        array('src' => 'adminAssets/assets/js/config/tour.js'), 
    
        array('src' => 'adminAssets/assets/js/Site.js'), 
        array('src' => 'adminAssets/global/js/Plugin/asscrollable.js'), 
        array('src' => 'adminAssets/global/js/Plugin/slidepanel.js'), 
        array('src' => 'adminAssets/global/js/Plugin/switchery.js'), 
        /*array('src' => 'adminAssets/global/js/Plugin/matchheight.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/js/Plugin/jvectormap.js', 'esLogin' => false), 
        array('src' => 'adminAssets/assets/examples/js/dashboard/v1.js', 'esLogin' => false), 
        array('src' => 'adminAssets/global/js/Plugin/jquery-placeholder.js', 'esLogin' => true),*/ 

        array('src' => 'js/react.development.js', 'crossorigin' => true), 
        array('src' => 'js/react-dom.development.js', 'crossorigin' => true), 
    )
];