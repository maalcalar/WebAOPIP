@extends('layouts.adminMenu')
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="Miguel Alcalá">

        <title>AOPIP Admin - @yield('title')</title>

        <!-- Loading Google Web fonts-->
        @foreach ($fontsAdmin as $font)
        <link href="{{ url($font['href']) }}" rel="stylesheet" type="text/css" />
        @endforeach

        @foreach ($stylesAdmin as $style)
            @if (!isset($style['esLogin']))
                @if (isset($style['id']))
                <link rel="stylesheet" href="{{ url($style['href']) }}" id="{{ $style['id'] }}" type="text/css"/>
                @else
                <link rel="stylesheet" href="{{ url($style['href']) }}" type="text/css"/>
                @endif
            @elseif (isset($style['esLogin']) && ($style['esLogin'] == $esLogin))
                @if (isset($style['id']))
                <link rel="stylesheet" href="{{ url($style['href']) }}" id="{{ $style['id'] }}" type="text/css"/>
                @else
                <link rel="stylesheet" href="{{ url($style['href']) }}" type="text/css"/>
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

        @foreach ($headJsAdmin as $hjs)
        <script type="text/javascript" src="{{ url($hjs['src']) }}"></script>
        @endforeach

        <script>
            Breakpoints();
        </script>
    </head>
    <body class="animsition {{$bodyClass}}" style="{{$bodyStyle}}}">
        <div id="wrapper">
            <div id="mask">
                <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->
                @if (!$esLogin)
                    @section('adminMenu')
                    @show
                @endif

                @section('contenido')
                @show
            </div>
        </div>

        @foreach ($bodyJsAdmin as $bjs)
            @if (!isset($bjs['esLogin']))
                @if (isset($bjs['crossorigin']))
                <script type="text/javascript" src="{{ url($bjs['src']) }}" crossorigin></script>
                @else
                <script type="text/javascript" src="{{ url($bjs['src']) }}"></script>
                @endif
            @elseif (isset($bjs['esLogin']) && ($bjs['esLogin'] == $esLogin))
                @if (isset($bjs['crossorigin']))
                <script type="text/javascript" src="{{ url($bjs['src']) }}" crossorigin></script>
                @else
                <script type="text/javascript" src="{{ url($bjs['src']) }}"></script>
                @endif
            @endif
        @endforeach
        <script>Config.set('assets', '{{ url("adminAssets/assets") }}');</script>
    </body>
</html>