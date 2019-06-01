<!-- Mainheader Menu Section -->	
<div class="mainheaderslide" id="slide">
    <div id="{{ $idMenuBar }}" class="header">
        <div class="menu-inner">
            <div class="container">
                <div class="row">
                    <div class="header-table col-md-12 header-menu">
                        <!--  Logo section -->
                        <!--<div class="brand"><a href="{{ (url()->current() == url('Inicio'))? '#': '/Inicio' }}" class="nav-link"><span> AOPIP </span></a></div>-->
                        <div class="brand">
                            <a href="{{ (url()->current() == url('Inicio'))? '#': '/Inicio' }}" class="nav-link"><img src="{{ url('img/logo_001.png') }}" alt="Logo AOPIP" height="65"/></a>
                        </div>
                        <!--  // Logo section -->
        
                        <!-- Home Page Menu section -->
                        <nav class="main-nav">
                            <a href="#" class="nav-toggle"></a>
                            <ul  id="home_nav" class="nav">
                                <li><a href="{{ (url()->current() == url('Inicio'))? '#': '/Inicio' }}" class="nav-link {{ (url()->current() == url('Inicio'))? 'selected': '' }}" style="font-size: 17px;">Inicio</a></li>
                                <li><a href="{{ (url()->current() == url('Nosotros'))? '#': '/Nosotros' }}" class="nav-link {{ (url()->current() == url('Nosotros'))? 'selected': '' }}" style="font-size: 17px;">Nosotros</a></li>
                                <li><a href="{{ (url()->current() == url('Menu'))? '#': '/Menu' }}" class="nav-link {{ (url()->current() == url('Menu'))? 'selected': '' }}" style="font-size: 17px;">Menú</a></li>
                                <li><a href="{{ (url()->current() == url('Contacto'))? '#': '/Contacto' }}" class="nav-link {{ (url()->current() == url('Contacto'))? 'selected': '' }}" style="font-size: 17px;">Contáctanos</span></a></li>	
                            </ul>
                        </nav>
                        <!--  // Home Page Menu section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>