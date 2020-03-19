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
               <button class="btn btn-md btn-primary text-white text-center mb-2 mt-2" data-toggle="collapse" href="#municipios" role="button" aria-expanded="false" aria-controls="municipios">MUNICIPIOS</button>
                <div class="text-center collapse" id="municipios">
                <div class="container align-items-center">
                <table class="text-center table table-hover table-responsive p-1" style="font-size: 12px;">
                  <thead>
                    <tr class="bg-primary text-white" style="font-family: consolas;">
                      <th scope="col">Municipio</th>
                      <th scope="col">Presupuestado</th>
                      <th scope="col">Ejecutado</th>
                      <th scope="col">%</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <th class="text-left" scope="row">Baranoa</th>
                      <td>37.450</td>
                      <td>2.450</td>
                      <td>7%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Campeche</th>
                      <td>3.000</td>
                      <td>2.500</td>
                      <td>83%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Campo de la Cruz</th>
                      <td>250.000</td>
                      <td>23.000</td>
                      <td>9%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Candelaria</th>
                      <td>2.500</td>
                      <td>1.500</td>
                      <td>60%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Luruaco</th>
                      <td>34.500</td>
                      <td>2.050</td>
                      <td>6%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Malambo</th>
                      <td>10.000</td>
                      <td>2.500</td>
                      <td>25%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Piojo</th>
                      <td>3.000</td>
                      <td>2.500</td>
                      <td>83%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Ponedera</th>
                      <td>25.000</td>
                      <td>5.000</td>
                      <td>20%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Sabanalarga</th>
                      <td>22.000</td>
                      <td>15.000</td>
                      <td>68%</td>
                    </tr>
                    <tr>
                      <th class="text-left" scope="row">Santo Tomas</th>
                      <td>43.000</td>
                      <td>15.000</td>
                      <td>35%</td>
                    </tr>
                  </tbody>
                </table>
                </div>
                </div>
                <button class="btn btn-md btn-primary text-white text-center mb-2 mt-2 ml-2" data-toggle="collapse" href="#tipoProyecto" role="button" aria-expanded="false" aria-controls="tipoProyecto">TIPOS DE PROYECTOS</button>
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
                          <td>Edificios Oficiales</td>
                          <td>58.000</td>
                          <td>27.500</td>
                          <td>47%</td>
                        </tr>
                        <tr>
                          <td>Obras de Infraestructura</td>
                          <td>47.500</td>
                          <td>6.500</td>
                          <td>14%</td>
                        </tr>
                        <tr>
                          <td>Plazas y Parques</td>
                          <td>61.950</td>
                          <td>9.500</td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>Vias Terciarias</td>
                          <td>263.000</td>
                          <td>28.000</td>
                          <td>11%</td>
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
                    <div id="map3" style="height:100%"></div>
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
<div class="modal fade" id="modalOptions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dirección: Calle x - Cra x</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="mapDetail" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="mapContainer" style="height: 70vh">
                            <div id="map2" style="height:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
