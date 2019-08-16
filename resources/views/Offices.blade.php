@extends('components.Main')

@section('pagina', 'Oficinas')
@section('seccion', 'Nuestras Oficinas')

@section('body')
    <section>
        <h4 class="text-center mb-5 font-weight-bold dark-grey-text wow fadeIn">Villahermosa, Tabasco</h4>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-3 text-center">
                    <i class="fas fa-map-marker-alt fa-2x red-text mb-4"></i>
                    <p class="grey-text">Marcelino Cabieses #407, Colonia Pino Suarez,2 CP. 86168, Villahermosa, Tabasco.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-envelope fa-2x red-text mb-4"></i>
                    <p class="grey-text">vht@ib-mexico.com</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-phone fa-2x red-text mb-4"></i>
                    <p class="grey-text">+52 (993)351-1916</p>
                </div>
            </div>
        </div>
    </section> 
    <!--Maps Villahermosa-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9" style="height: 400px" id="mapTab">

                </div>
            </div>
        </div>
    </section>
    
    <section>
        <h4 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text wow fadeIn">Tuxtla Gutiérrez, Chiapas</h4>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-3 text-center">
                    <i class="fas fa-map-marker-alt fa-2x red-text mb-4"></i>
                    <p class="grey-text">Av. Tres Marias No. 206 Fracc. Tres Marias y Los Arroyos
                        Entre Calle Rio Poti y San Roque
                        CP. 29059, Tuxtla Guti&eacute;rrez, Chiapas.
                        </p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-envelope fa-2x red-text mb-4"></i>
                    <p class="grey-text">tgc@ib-mexico.com</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-phone fa-2x red-text mb-4"></i>
                    <p class="grey-text">+52 (961)223-3431</p>
                </div>
            </div>
        </div>
    </section>
    <!--Maps Tuxtla Gutiérrez-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9" style="height: 400px" id="mapChis">

                </div>
            </div>
        </div>
    </section>

    <section>
        <h4 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text wow fadeIn">Ciudad del Carmen, Campeche</h4>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-3 text-center">
                    <i class="fas fa-map-marker-alt fa-2x red-text mb-4"></i>
                    <p class="grey-text">Lote 59, Manzana 130, Cerrada Santa Ágata, Fraccionamiento Residencial San Miguel, CP. 24157, Ciudad del Carmen, Campeche.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-envelope fa-2x red-text mb-4"></i>
                    <p class="grey-text">cdc@ib-mexico.com</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-phone fa-2x red-text mb-4"></i>
                    <p class="grey-text">+52 (993)351-1916</p>
                </div>
            </div>
        </div>
    </section>
    <!--Maps Tuxtla Gutiérrez-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9" style="height: 400px" id="mapCar">

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/offices.js') }}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AIAdrj8AQF3xVzW8CVFuHA3xo51MOEw&callback=initGoogleMaps" async defer></script>
@endsection