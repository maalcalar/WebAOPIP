<!-- Mainheader Menu Section -->	
<div class="mainheaderslide" id="slide">
    <div id="{{ $idMenuBar }}" class="header">
        <div class="menu-inner">
            <div class="container">
                <div class="row">
                    <div class="header-table col-md-12 header-menu">
                        <!--  Logo section -->
                        <div class="brand"><a href="/Inicio" class="nav-link"><span> AOPIP </span></a></div>
                        <!--  // Logo section -->
        
                        <!-- Home Page Menu section -->
                        <nav class="main-nav">
                            <a href="#" class="nav-toggle"></a>
                            <ul  id="home_nav" class="nav">
                                <li><a href="{{ (url()->current() == url('Inicio'))? '#': '/Inicio' }}" class="nav-link {{ (url()->current() == url('Inicio'))? 'selected': '' }}">Inicio</a></li>
                                <li><a href="{{ (url()->current() == url('Nosotros'))? '#': '/Nosotros' }}" class="nav-link {{ (url()->current() == url('Nosotros'))? 'selected': '' }}">Nosotros</a></li>
                                <li><a href="{{ (url()->current() == url('Menu'))? '#': '/Menu' }}" class="nav-link {{ (url()->current() == url('Menu'))? 'selected': '' }}">Menú</a></li>
                                <li><a href="{{ (url()->current() == url('Contacto'))? '#': '/Contacto' }}" class="nav-link {{ (url()->current() == url('Contacto'))? 'selected': '' }}">Contáctanos</span></a></li>	
                            </ul>
                        </nav>
                        <!--  // Home Page Menu section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>