@extends('components.Main')

@section('seccion', 'Nuestras Oficinas')

@section('body')
    <section>
        <h4 class="text-center mb-5 font-weight-bold dark-grey-text wow fadeIn">Villahermosa, Tabasco</h4>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-3 text-center">
                    <i class="fas fa-map-marker-alt fa-2x red-text mb-4"></i>
                    <p class="grey-text">Marcelino Cabieses #407, Villahermosa, Tab.</p>
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
                    <p class="grey-text">Marcelino Cabieses #407, Villahermosa, Tab.</p>
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
    <!--Maps Tuxtla Gutiérrez-->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9" style="height: 400px" id="mapChis">

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        var mapTab;
        var mapChis;
        function initGoogleMaps() {
            var locationTab = { lat: 17.9725684, lng: -92.9511968 }; 
            var LatlngTab = new google.maps.LatLng(locationTab);
            var mapOptionsTab = 
            {
                center: LatlngTab,
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                draggable: true,
                scrollwheel: false,
                zoomControl: true,
                zoomControlOptions:
                {
                    position: google.maps.ControlPosition.RIGHT_CENTER
                },
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                rotateControl: false,
                fullscreenControl: true,
                styles:
                [
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                    {
                        "color": "#ffeba1"
                    }
                    ]
                }
                ]
            }

            mapTab = new google.maps.Map(document.getElementById('mapTab'), mapOptionsTab);

            var locationChis = { lat: 17.9725684, lng: -92.9511968 }; 
            var LatlngChis = new google.maps.LatLng(locationChis);
            var mapOptionsChis = 
            {
                center: LatlngChis,
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                draggable: true,
                scrollwheel: false,
                zoomControl: true,
                zoomControlOptions:
                {
                    position: google.maps.ControlPosition.RIGHT_CENTER
                },
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                rotateControl: false,
                fullscreenControl: true,
                styles:
                [
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                    {
                        "color": "#ffeba1"
                    }
                    ]
                }
                ]
            }

            mapChis = new google.maps.Map(document.getElementById('mapChis'), mapOptionsChis);


            /*
            var marker = new google.maps.Marker({
                position: location,
                //label: labels[labelIndex++ % labels.length],
                //icon: 'images/ico/marker.png',
                map: mapTab
            });
            marker.addListener('click', function() {
                infowindow.open(mapTab, marker);
            });*/
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AIAdrj8AQF3xVzW8CVFuHA3xo51MOEw&callback=initGoogleMaps" async defer></script>
@endsection