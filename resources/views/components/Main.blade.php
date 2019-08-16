<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/icon/ib-logo.png">
    <title>IB-México | @yield('pagina')</title>

    <title>IB-México</title>

    @include('components.Css')
    @section('css')
        
    @show
</head>
<body>
    
    @include('components.Navbar')

    <section class="pt-5 pb-5">
        <div class="container">
            <h2 class="mb-5 mt-5 pt-1 font-weight-bold dark-grey-text wow fadeIn">@yield('seccion')</h2>
        </div>

        @section('body')
        
            
        @show
        <!-- TeamViewer flotante -->
        <div class="fixed-action-btn float-left">
            <a href="https://get.teamviewer.com/qs_corpmx" target="_blank" title="Soporte Teamviewer" style="margin: 10px; padding: 0px;">
                <img src="{{ asset('img/icon/teamviewer.png') }}" alt="" class="z-depth-1" style="margin: 10px; 100px 10px 10px">
            </a>
        </div>
    </section>
    
    @include('components.Footer')

    @include('components.Js')
    @section('js')
        
    @show
</body>
</html>