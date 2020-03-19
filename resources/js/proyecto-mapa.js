$(document).ready(function () {

  var markers3 = [
    {
      id: 'sabanaLarga',
      position: new google.maps.LatLng(10.6316, -74.9207)
    }

  ]
  var latlng = new google.maps.LatLng(10.6316, -74.9207);
  var mapOptions1 = {
    zoom: 15,
    center: latlng,
    draggable: false,
    mapTypeId: 'satellite',
    disableDefaultUI: false,
    zoomControl: false,
    streetViewControl: true
  }

  map_ps = new google.maps.Map(document.getElementById('map_ps'), mapOptions1);
  setMarkers(map_ps, markers3, true)

  function setMarkers(map, markers, info) {

    var infowindow

    markers.map(m => {
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: m.position,
        draggable: false,
        icon: 'images/marcadores/marcadorAmarillo.png'
      });
      (function (marker) {
        google.maps.event.addListener(marker, 'click', function () {
          if (!infowindow) {
            infowindow = new google.maps.InfoWindow();
          }
          if (info) {
             var contentString = `
          <div class="container-fluid">
          <h4 class="m-0"> Informacion del Proyecto</h4>
          <div class="row mt-3 align-items-center">
              <div class="card-deck flex-row flex-nowrap mb-3">
                <div class="card">
                  <div class="card-body pb-1">
                    <h5 class="card-title m-0 mb-2">Contrato: 234-2019</h5>
                    <p class="card-text m-0"> Descripcion: Contruccion 2km Vias Terciarias Sabanalarga - El Carmen</p>
                    <p class="card-text m-0">Presupuestado: 12.000.000 <i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                    <p class="card-text m-0">Ejecutado: 10.000.000 <i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                    <p class="card-text m-0"><b class="text-success">90%</b> de Avance</p>
                    <a href="proyecto"><button class="btn btn-primary text-white btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i>Ver Mas</button></a>
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
});