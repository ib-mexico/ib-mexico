<nav class="navbar navbar-expand-lg navbar-dark fixed-top red scrolling-navbar z-depth-0">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="{{ asset('img/icon/ib-blanco.png') }}" height="50" class="d-inline-block align-top"alt=IB-México>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Links-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('inicio') }}">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('nosotros') }}" data-offset="80">Qui&eacute;nes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('servicios') }}" data-offset="80">Soluciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('sucursales') }}" data-offset="20">Oficinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('contacto') }}" data-offset="80">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>