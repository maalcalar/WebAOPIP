@if (!$esLogin)
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center">
            <img class="navbar-brand-logo" src="{{ url('adminAssets/assets/images/logo.png') }}" title="AOPIP">
            <span class="navbar-brand-text hidden-xs-down"> AOPIP</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
        <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
            </i>
            </a>
        </li>
        <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
            <span class="sr-only">Toggle fullscreen</span>
            </a>
        </li>
        <!--<li class="nav-item hidden-float">
            <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
            <span class="sr-only">Toggle Search</span>
            </a>
        </li>-->
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                    <img src="{{ url('adminAssets/global/portraits/5.jpg') }}" alt="...">
                    <i></i>
                </span>
                </a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                    <div class="dropdown-divider" role="presentation"></div>
                    <form id="logout" method="post" action="{{ route('logout') }}">
                        {{ csrf_field() }}
                        <button class="dropdown-item" type="submit">
                            <i class="icon wb-power" aria-hidden="true"></i> Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->

    <!-- Site Navbar Seach -->
    <!--<div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
        <div class="form-group">
            <div class="input-search">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
        </div>
        </form>
    </div>-->
    <!-- End Site Navbar Seach -->
    </div>
</nav>  

<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
            <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">General</li>
                <li class="site-menu-item">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Publicaciones</span>
                        <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{ url('/admin/comunicados') }}">
                                <span class="site-menu-title">Comunicados</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a class="" href="javascript:void(0)">
                                <span class="site-menu-title">Menú</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('/admin/menuCasuarinas') }}">
                                    <span class="site-menu-title">Casuarinas</span>
                                </a>
                                </li>
                                <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('/admin/menuChosica') }}">
                                    <span class="site-menu-title">Chosica</span>
                                </a>
                                </li>
                                <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('/admin/menuSantaMaria') }}">
                                    <span class="site-menu-title">Santa María</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--<li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Páginas</span>
                        <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <span class="site-menu-title">Menús</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('/admin/menuCasuarinas') }}">
                                    <span class="site-menu-title">Casuarinas</span>
                                </a>
                                </li>
                                <li class="site-menu-item">
                                <a class="animsition-link" href="pages/error-403.html">
                                    <span class="site-menu-title">Chosica</span>
                                </a>
                                </li>
                                <li class="site-menu-item">
                                <a class="animsition-link" href="pages/error-404.html">
                                    <span class="site-menu-title">Santa María</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>-->
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <!--<a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>-->
        <a href="javascript: document.getElementById('logout').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>

</div>
@endif