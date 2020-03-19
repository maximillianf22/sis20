require('./bootstrap');
require('./map-proyectos');
require('./map-municipio');
require('./proyecto-mapa');
$(document).ready(function () {

  var markers = [
    {
      id: 'barranquilla',
      position: new google.maps.LatLng(10.9878, -74.7889)
    },
    {
      id: 'baranoa',
      position: new google.maps.LatLng(10.7940798, -74.9163971)
    },
    {
      id: 'usiacuri',
      position: new google.maps.LatLng(10.75, -74.983)
    },
    {
      id: 'tubara',
      position: new google.maps.LatLng(10.883, -74.983)
    },
    {
      id: 'suan',
      position: new google.maps.LatLng(10.333, -74.883)
    },
    {
      id: 'soledad',
      position: new google.maps.LatLng(10.9166, -74.7501)
    },
    {
      id: 'santaLucia',
      position: new google.maps.LatLng(10.317, -74.95)
    },
    {
      id: 'baranoa',
      position: new google.maps.LatLng(10.7940798, -74.9163971)
    },
    {
      id: 'campoCruz',
      position: new google.maps.LatLng(10.3781, -74.8836)
    },
    {
      id: 'candelaria',
      position: new google.maps.LatLng(10.4585, -74.8806)
    },
    {
      id: 'luruaco',
      position: new google.maps.LatLng(10.617,  -75.15)
    },
    {
      id: 'malambo',
      position: new google.maps.LatLng(10.8595304, -74.7738571)
    },
    {
      id: 'piojo',
      position: new google.maps.LatLng(10.883, -74.983)
    },
    {
      id: 'Repelon',
      position: new google.maps.LatLng(10.5, -75.133)
    },
    {
      id: 'puertoColombia',
      position: new google.maps.LatLng(10.983, -74.95)
    },
    {
      id: 'polonuevo',
      position: new google.maps.LatLng(10.767, -74.85)
    },
    {
      id: 'sabanaGrande',
      position: new google.maps.LatLng(10.8, -74.75)
    },
    {
      id: 'ponedera',
      position: new google.maps.LatLng(10.633, -74.75)
    },
    {
      id: 'sabanaLarga',
      position: new google.maps.LatLng(10.6316, -74.9207)
    },
    {
      id: 'santoTomas',
      position: new google.maps.LatLng(10.75, -74.75)
    }
  ]
  var latlng = new google.maps.LatLng(10.6995397, -74.9713053);
  var mapOptions1 = {
    zoom: 9.8,
    center: latlng,
    draggable: false,
    mapTypeId: 'satellite',
    disableDefaultUI: false,
    zoomControl: false,
    streetViewControl: true
  }

  map = new google.maps.Map(document.getElementById('map'), mapOptions1);
  setMarkers(map, markers, true)

  var markers2 = [
    {
      id: 'sem1',
      position: new google.maps.LatLng(10.995357, -74.802205)
    },
    {
      id: 'sem2',
      position: new google.maps.LatLng(10.995352, -74.802290)
    }
  ]
  var mapOptions2 = {
    zoom: 21,
    center: new google.maps.LatLng(10.9953151, -74.8022596),
    mapTypeId: 'roadmap',
    disableDefaultUI: true,
    gestureHandling: 'none',
    zoomControl: false,
  }
  map2 = new google.maps.Map(document.getElementById('map2'), mapOptions2);
  setMarkers(map2, markers2, false)

  function setMarkers(map, markers, info) {

    var infowindow

    markers.map(m => {
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: m.position,
        draggable: false,
        icon: 'assets/icons/placeholder.svg'
      });
      (function (marker) {
        google.maps.event.addListener(marker, 'click', function () {
          if (!infowindow) {
            infowindow = new google.maps.InfoWindow();
          }
          if (info) {
            var contentString = `
          <div class="container-fluid">
          <h4 class="m-0"> Inf. del Municipio</h4>
          <div class="row mt-3 align-items-center">
              <div class="card-deck flex-row flex-nowrap mb-3">
                <div class="card">
                  <div class="card-body pb-1">
                    <h5 class="card-title m-0 mb-2">Poyectos: 5</h5>
                    <p class="card-text m-0"> Presupuestado: 285.000<i class="text-success fa fa-circle" aria-hidden="true"></i></p>
                    <p class="card-text m-0">Ejecutado: 120.000 <i class=" text-warning fa fa-circle" aria-hidden="true"></i></p>
                    <p><b class="card-text m-0 text-warning">40%</b> de Avance</p>
                    <a href="municipio-proyectos"><button class="btn btn-primary btnDetail mt-3 text-center text-white mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i>Ver Mas</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>`
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
          }
        });

      })(marker);
    })
  }

  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  $('.selectCity').on('change', function () {
    var latitud = $(this).children("option:selected").data("lat");
    var longitud = $(this).children("option:selected").data("long");
    // alert(latitud + ' - ' + longitud);
    var cityMap = new google.maps.LatLng(latitud, longitud);
    map.panTo(cityMap);
    map.setZoom(15);
  })
});