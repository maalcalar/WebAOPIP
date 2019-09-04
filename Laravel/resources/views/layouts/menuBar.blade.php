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
                                <li><a href="#" class="nav-link {{ (url()->current() == url('Nosotros'))? 'selected': '' }}" style="font-size: 17px;">Nosotros</a>
                                    <ul>
                                        <li><a href="{{ (url()->current() == url('Nosotros/Historia'))? '#': '/Nosotros/Historia' }}" class="nav-link {{ (url()->current() == url('Nosotros/Historia'))? 'selected': '' }}" style="font-size: 17px;">Historia de la AOPIP</a></li>
                                        <li><a href="{{ (url()->current() == url('Nosotros/Mision_Vision'))? '#': '/Nosotros/Mision_Vision' }}" class="nav-link {{ (url()->current() == url('Nosotros/Mision_Vision'))? 'selected': '' }}" style="font-size: 17px;">Misión y Visión</a></li>
                                        <li><a href="{{ (url()->current() == url('Nosotros/Himno'))? '#': '/Nosotros/Himno' }}" class="nav-link {{ (url()->current() == url('Nosotros/Himno'))? 'selected': '' }}" style="font-size: 17px;">Himno de la PIP</a></li>
                                        <li><a href="{{ (url()->current() == url('Nosotros/CD'))? '#': '/Nosotros/CD' }}" class="nav-link {{ (url()->current() == url('Nosotros/CD'))? 'selected': '' }}" style="font-size: 17px;">Consejo Directivo</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="nav-link {{ (url()->current() == url('Asociados'))? 'selected': '' }}" style="font-size: 17px;">Asociados</a>
                                    <ul>
                                        <li><a href="{{ (url()->current() == url('Asociados/Menu'))? '#': '/Asociados/Menu' }}" class="nav-link {{ (url()->current() == url('Asociados/Menu'))? 'selected': '' }}" style="font-size: 17px;">Menú de la semana</a></li>
                                        <li><a href="{{ (url()->current() == url('Asociados/Alquiler'))? '#': '/Asociados/Alquiler' }}" class="nav-link {{ (url()->current() == url('Asociados/Alquiler'))? 'selected': '' }}" style="font-size: 17px;">Alquileres, Bungalows y Eventos</a></li>
                                        <li><a href="{{ (url()->current() == url('Asociados/Servicios'))? '#': '/Asociados/Servicios' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios'))? 'selected': '' }}" style="font-size: 17px;">Servicios</a>
                                            <ul>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Natacion'))? '#': '/Asociados/Servicios/Natacion' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Natacion'))? 'selected': '' }}" style="font-size: 17px;">Natación</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Gimnasio'))? '#': '/Asociados/Servicios/Gimnasio' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Gimnasio'))? 'selected': '' }}" style="font-size: 17px;">Gimnasio</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Sauna'))? '#': '/Asociados/Servicios/Sauna' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Sauna'))? 'selected': '' }}" style="font-size: 17px;">Sauna</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Restaurante'))? '#': '/Asociados/Servicios/Restaurante' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Restaurante'))? 'selected': '' }}" style="font-size: 17px;">Restaurante</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/AreasInfantiles'))? '#': '/Asociados/Servicios/AreasInfantiles' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/AreasInfantiles'))? 'selected': '' }}" style="font-size: 17px;">Áreas Infantiles</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/CamasMasajeadoras'))? '#': '/Asociados/Servicios/CamasMasajeadoras' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/CamasMasajeadoras'))? 'selected': '' }}" style="font-size: 17px;">Camas Masajeadoras</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Tenis'))? '#': '/Asociados/Servicios/Tenis' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Tenis'))? 'selected': '' }}" style="font-size: 17px;">Tenis</a>
                                                <li><a href="{{ (url()->current() == url('Asociados/Servicios/Futbol'))? '#': '/Asociados/Servicios/Futbol' }}" class="nav-link {{ (url()->current() == url('Asociados/Servicios/Futbol'))? 'selected': '' }}" style="font-size: 17px;">Cancha de fútbol</a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="nav-link {{ (url()->current() == url('Sedes'))? 'selected': '' }}" style="font-size: 17px;">Sedes</a>
                                    <ul>
                                        <li><a href="{{ (url()->current() == url('Sedes/Casuarinas'))? '#': '/Sedes/Casuarinas' }}" class="nav-link {{ (url()->current() == url('Sedes/Casuarinas'))? 'selected': '' }}" style="font-size: 17px;">Casuarinas</a>
                                        <li><a href="{{ (url()->current() == url('Sedes/Chosica'))? '#': '/Sedes/Chosica' }}" class="nav-link {{ (url()->current() == url('Sedes/Chosica'))? 'selected': '' }}" style="font-size: 17px;">Chosica</a>
                                        <li><a href="{{ (url()->current() == url('Sedes/SantaMaria'))? '#': '/Sedes/SantaMaria' }}" class="nav-link {{ (url()->current() == url('Sedes/SantaMaria'))? 'selected': '' }}" style="font-size: 17px;">Santa María</a>
                                    </ul>
                                </li>
                                <!--<li><a href="{{ (url()->current() == url('Menu'))? '#': '/Menu' }}" class="nav-link {{ (url()->current() == url('Menu'))? 'selected': '' }}" style="font-size: 17px;">Menú</a></li>-->
                                <li><a href="#" class="nav-link {{ (url()->current() == url('Contacto'))? 'selected': '' }}" style="font-size: 17px;">Contáctanos</span></a>
                                    <ul>
                                        <li><a href="{{ (url()->current() == url('Contacto/Anexos'))? '#': '/Contacto/Anexos' }}" class="nav-link {{ (url()->current() == url('Contacto/Anexos'))? 'selected': '' }}" style="font-size: 17px;">Números y Anexos</span></a></li>
                                        <li><a href="{{ (url()->current() == url('Contacto/Correos'))? '#': '/Contacto/Correos' }}" class="nav-link {{ (url()->current() == url('Contacto/Correos'))? 'selected': '' }}" style="font-size: 17px;">Correos</span></a></li>
                                        <li><a href="{{ (url()->current() == url('Contacto/Redes'))? '#': '/Contacto/Redes' }}" class="nav-link {{ (url()->current() == url('Contacto/Redes'))? 'selected': '' }}" style="font-size: 17px;">Redes</span></a></li>
                                        <li><a href="{{ (url()->current() == url('Contacto/Horarios'))? '#': '/Contacto/Horarios' }}" class="nav-link {{ (url()->current() == url('Contacto/Horarios'))? 'selected': '' }}" style="font-size: 17px;">Horarios</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!--  // Home Page Menu section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>