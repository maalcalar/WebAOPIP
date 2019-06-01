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

        <link rel="shortcut icon" href="images/favicon.ico.png" /> 
        <link rel="apple-touch-icon" href="images/apple_touch_icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple_touch_icon_72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple_touch_icon_114x114.png" />

        @foreach ($headJs as $hjs)
        <script type="text/javascript" src="{{ url('js/' . $hjs['src']) }}"></script>
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
        <script type="text/javascript" src="{{ url('js/' . $bjs['src']) }}"></script>
        @endif
        @endforeach
    </body>
</html>