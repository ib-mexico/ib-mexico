var mapTab;
var mapChis;
var mapCar;

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

    var locationChis = { lat: 16.769478, lng: -93.172933 }; 
    var LatlngChis = new google.maps.LatLng(locationChis);
    var mapOptionsChis = 
    {
        center: LatlngChis,
        zoom: 18,
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

    mapCar = new google.maps.Map(document.getElementById('mapChis'), mapOptionsChis);


    var locationCar = { lat: 18.652651, lng: -91.779159 }; 
    var LatlngCar = new google.maps.LatLng(locationCar);
    var mapOptionsCar = 
    {
        center: LatlngCar,
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

    mapCar = new google.maps.Map(document.getElementById('mapCar'), mapOptionsCar);
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