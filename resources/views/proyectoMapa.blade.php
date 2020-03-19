<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>SIGEC Gestion de Proyectos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/cdi.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
</head>

<body>
<header style="background-color: #75b948;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-2 text-center">
            <nav class="navbar navbar_header" style="flex-wrap: nowrap;">
              <a href="javascript:;" id="menu-toggle" style="color: #fff;font-size: 20px;">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </a>
              <a href="/home">
                <img class="d-block" width="100px" src="{{ asset('images/logo_gob.png')}}" alt="logo">
              </a>
            </nav>
          </div>
          <div class="col-lg-2">
            <select class="text-center font-weight-bold selectSearch form-control mr-2 selectCity" name="" id="">
              <option style="background-color:#ccc;">MUICIPIO</option>
              <option data-lat="10.7940798" data-long="-74.9163971" value="">BARANOA</option>
              <option data-lat="10.3781" data-long="-74.8836" value="">CAMPO DE LA CRUZ</option>
              <option data-lat="10.4585" data-long="-74.8806" value="">CANDELARIA</option>
              <option data-lat="10.617" data-long="-75.15" value="">LURUACO</option>
              <option data-lat="10.8595304" data-long="-74.7738571" value="">MALAMBO</option>
              <option data-lat="10.883" data-long="-74.983" value="">PIOJO</option>
              <option data-lat="10.633" data-long="-74.75" value="">PONEDERA</option>
              <option data-lat="10.6316" data-long="-74.9207" value="">SABANALARGA</option>
              <option data-lat="10.75" data-long="-74.75" value="">SANTO TOMAS</option>
              <option data-lat="10.5" data-long="-75.133" value="">REPELON</option>
              <option data-lat="10.767" data-long="-74.85" value="">POLO NUEVO</option>
            </select>
          </div>
          <div class="col-lg-2">
            <select class="text-center font-weight-bold selectSearch" id="listCiudad" onchange="selectCiudad(this.value)" name="">
              <option data-lat="11.0041072" data-long="-74.8069813" value="" style="background-color:#ccc;">TIPO DE PROYECTO</option>
              <option value="1">EDIFICIOS OFICIALES</option>
              <option value="2">OBRAS DE INFRAESTRUCTURA</option>
              <option value="3">PLAZAS Y PARQUES</option>
              <option value="4">VIAS TERCIARIAS</option>
            </select>
          </div>
          <div class="col-lg-2">
            <div id="btnConsolidado" style="display:none;">
              <a href="javascript:;" data-toggle="modal" data-target="#showConsolidado" class="btn btn-block" style="background-color: #fff;font-weight: bold;">CONSOLIDADO</a>
            </div>
          </div>
          <div class="col-lg-2 text-center">
            <div>
              <a href="javascript:;" onclick="openShowSearch()" class="btn btn-block" style="background-color: #fff;font-weight: bold;font-size: 15px;"><i class="fa fa-search" aria-hidden="true"></i> Búsqueda Avanzada</a>
            </div>
          </div>
          <div class="col-lg-2 text-center text-white">
            <a href="" class="text-white">Cerrar Sesion</a> | <a class="text-white" href="">Login</a>
          </div>
        </div>
      </div>
    </header>
  <section class="container-fluid">
    <div class="row">
            <div class=" text-center col-md-3 p-0">
                <button class="btn btn-md btn-primary text-white text-center mb-2 mt-2 ml-2" data-toggle="collapse" href="#tipoProyecto" role="button" aria-expanded="false" aria-controls="tipoProyecto">CONTRARO NRO. - 234-2019</button>
                 <div class="collapse show" id="tipoProyecto">
                    <div class="container align-items-center">
                    <table class="text-center table table-hover table-responsive p-1" style="font-size: 12px;">
                      <thead>
                       <tr class="bg-primary text-white" style="font-family: consolas;">
                          <th scope="col">Tipo</th>
                          <th scope="col">Presupuestado</th>
                          <th scope="col">Ejecutado</th>
                          <th scope="col">%</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td>Vias Terciarias</td>
                          <td>58.000</td>
                          <td>27.500</td>
                          <td>47%</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9 p-0">
                <div id="page-content-wrapper">
                <!-- Map container -->
                <div class="mapContainer" style="height: 82vh; width:100%">
                    <div id="map_ps" style="height:100%"></div>
                </div>
            </div>
        </div>
    </div>
  </section> 
  <footer style="background-color:#75b948;padding: 0px 0;color: #fff;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-2 text-center">
            <a href="/home">
              <img src="{{ asset('images/grupo_icbf.png')}}" alt="logo">
            </a>
          </div>
          <div class="col-lg-6 text-center">
            <div class="top_nav_right" style="top: 15%;">
              <ul class="top_nav_menu" style="margin:0;">
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">QUIENES SOMOS</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">SOPORTE</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">CONTACTO</a>
                </li>
                <li class="bid_lineleftHome" style="margin-left:20px;">
                  <a href="/" style="font-weight: bold;font-size: 15px;color:#fff;">INICIAR SESIÓN</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="top_nav_right" style="top: 15%;">
              <ul class="top_nav_menu" style="margin:0;">
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">REDES SOCIALES</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                  </a>
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </footer>
</body>
</html>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM" defer></script>

