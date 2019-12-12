@extends('layouts.menuBar')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>AOPIP - @yield('title')</title>
        <meta name="description" content="Eventos, bungalows, gimnasio, sauna, masajes, desayunos, almuerzos y más" />
        <meta name="keywords" content="AOPIP, Club AOPIP, clubaopip, clubaopip.com, aopip casuarinas, bungalows Chosica, alquiler de bungalows Chosica, eventos, eventos casuarinas, eventos chosica, eventos santa maria, aopip eventos, sauna casuarinas, cancha de futbol, cancha de futbol casuarinas aopip, piscina, piscina casuarinas aopip, aopip club" />
        <meta name="author" content="Miguel Alcalá" />

        <!-- Loading Google Web fonts-->
        @foreach ($fonts as $font)
        <link href="{{ url('css/'.$font['href']) }}" rel="stylesheet" type="text/css" />
        @endforeach

        @foreach ($styles as $style)
        @if (isset($style['id']))
        <link rel="stylesheet" href="{{ url('css/' . $style['href']) }}" id="{{ $style['id'] }}" type="text/css"/>
        @else

        @if (isset($esInicio))
        <link rel="stylesheet" href="{{ url('css/' . $style['href']) }}" type="text/css"/>
        @else
        @if (!isset($style['esInicio']))
        <link rel="stylesheet" href="{{ url('css/' . $style['href']) }}" type="text/css"/>
        @endif
        @endif
        
        
        @endif
        @endforeach

        <!--Color Change-->
        <!--<link rel="stylesheet" href="css/colors/color1.css" id="color" type="text/css" />-->
        <!--Color Change End-->

        <link rel="shortcut icon" href="images/favicon_aopip.ico" /> 
        <link rel="apple-touch-icon" href="images/apple_touch_icon_aopip.ico" />
        <link rel="apple-touch-icon" sizes="96x96" href="images/apple_touch_icon_aopip_96x96.ico" />
        <link rel="apple-touch-icon" sizes="128x128" href="images/apple_touch_icon_aopip_128x128.ico" />

        @foreach ($headJs as $hjs)
        <script type="text/javascript" src="{{ url('js/' . $hjs['src']) }}"></script>
        @endforeach
    </head>
    <body>
        <div id="wrapper">
            <div id="mask">
                @section('menuBar')
                @show

                @section('contenido')
                @show
            </div>
        </div>

        @foreach ($bodyJs as $bjs)
        @if (isset($bjs['nopre']))
        <script type="<?php echo isset($bjs['type'])? $bjs['type']:'text/javascript' ; ?>" src="{{ $bjs['src'] }}"></script>
        @else
        <script type="<?php echo isset($bjs['type'])? $bjs['type']:'text/javascript' ; ?>" src="{{ url('js/' . $bjs['src']) }}"></script>
        @endif
        @endforeach
    </body>
</html>