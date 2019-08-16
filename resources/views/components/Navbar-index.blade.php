<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <span class="navbar-brand">
            <img src="{{ asset('img/icon/ib-logo.png') }}" height="50" class="d-inline-block align-top"alt=IB-México>
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Links-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('inicio') }}"><strong>Inicio</strong></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('nosotros') }}" data-offset="80"><strong>Qui&eacute;nes somos</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('servicios') }}" data-offset="80"><strong>Soluciones</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('sucursales') }}" data-offset="20"><strong>Sucursales</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{ route('contacto') }}" data-offset="80"><strong>Contacto</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>