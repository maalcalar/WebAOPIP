@extends('layouts.menuBar')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>AOPIP - @yield('title')</title>
        <meta name="description" content="Página Web de AOPIP" />
        <meta name="keywords" content="AOPIP" />
        <meta name="author" content="Miguel Alcalá" />

        <!-- Loading Google Web fonts-->
        @foreach ($fonts as $font)
        <link href="css/{{ $font['href'] }}" rel="stylesheet" type="text/css" />
        @endforeach

        @foreach ($styles as $style)
        @if (isset($style['id']))
        <link rel="stylesheet" href="css/{{ $style['href'] }}" id="{{ $style['id'] }}" type="text/css"/>
        @else

        @if (isset($esInicio))
        <link rel="stylesheet" href="css/{{ $style['href'] }}" type="text/css"/>
        @else
        @if (!isset($style['esInicio']))
        <link rel="stylesheet" href="css/{{ $style['href'] }}" type="text/css"/>
        @endif
        @endif
        
        
        @endif
        @endforeach

        <!--Color Change-->
        <!--<link rel="stylesheet" href="css/colors/color1.css" id="color" type="text/css" />-->
        <!--Color Change End-->

        <link rel="shortcut icon" href="images/favicon.ico.png" /> 
        <link rel="apple-touch-icon" href="images/apple_touch_icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple_touch_icon_72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple_touch_icon_114x114.png" />

        @foreach ($headJs as $hjs)
        <script type="text/javascript" src="js/{{ $hjs['src'] }}"></script>
        @endforeach
    </head>
    <body>
        <div id="wrapper">
            <div id="mask">
                @if ($esInicio)
                <div class="mainheaderslide" id="slide">
                    @section('menuBar')
                    @show
                </div>
                @else
                    @section('menuBar')
                    @show
                @endif

                @section('contenido')
                @show
            </div>
        </div>

        @foreach ($bodyJs as $bjs)
        @if (isset($bjs['nopre']))
        <script type="text/javascript" src="{{ $bjs['src'] }}"></script>
        @else
        <script type="text/javascript" src="js/{{ $bjs['src'] }}"></script>
        @endif
        @endforeach

        <!--java script-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Form Validation-->
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <!-- Form Validation End-->
        <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


        <!-- SlickNavigation For Mobile Device-->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
        <!-- SlickNavigation For Mobile Device Ends-->

        <!-- Content NiceScroll -->
        <script src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- Content NiceScroll End-->

        <!-- include retina js -->
        <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
        <!-- include retina js Ends-->

        <!-- Optional Scripts Starts -->

        <!-- Preloader Starts -->
        <script type="text/javascript" src="js/jpreloader.min.js"></script>
        <!-- Preloader End -->

        <!-- Home Tiled Sldier -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/boxesFx.js"></script>
        <script type="text/javascript" src="js/wait.js"></script>
        <!-- Home Tiled Sldier End-->

        <!-- Optional Scripts Ends -->

        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/custom_general_box.js"></script>
        <script type="text/javascript" src="js/custom_general.js"></script>
        <!-- Custom Scripts End-->
    </body>
</html>