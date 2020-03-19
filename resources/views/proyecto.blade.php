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

  <div class="container align-items-center mx-auto" style="width:100%;">
    <div class="row align-items-center mx-auto">
      <div class="jumbotron offset-md-2 p-4 mt-4 p-md-5 text-white roundedd border border-success" style="background-color: white;">
          <h3 class="text-dark text-center mb-0 mt-1">Contrato Nro. - 234-2019</h3>
        <table class="table table-hover table-responsive p-2" >
          <tr>
            <th class="">Objeto:</th>
            <th class="font-weight-normal" colspan="3">Construccion 2Km Vias Terciarias Sabanalarga - El Carmen</th>
          </tr>
          <tr>
            <td class="font-weight-bold">CDP:</td>
            <td class="">234-2016</td>
            <td class="font-weight-bold">OPS:</td>
            <td class="">432-2017</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Fecha de Adjudicacion:</td>
            <td class="">01/12/2019</td>
            <td class="font-weight-bold">Fecha Inicio:</td>
            <td class="">01/01/2020</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Fecha Finalizacion:</td>
            <td class="">30/03/2020</td>
            <td class="font-weight-bold">Tipo de Contrato:</td>
            <td class="">Abreviada</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Duracion Meses:</td>
            <td class="">3</td>
            <td class="font-weight-bold">Duracion Real:</td>
            <td class="">3</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Contratista:</td>
            <td class="">Max Vias S.A.S.</td>
            <td class="font-weight-bold">Supervisor:</td>
            <td class="">Andrez Suarez</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Presupuesto:</td>
            <td class="">$12.000.000</td>
            <td class="font-weight-bold">Ejecutado:</td>
            <td class="">$10.000.000</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Porcentaje de Avance:</td>
            <td class="">60%</td>
            <td class="font-weight-bold">Tipo de Proyecto:</td>
            <td class="">Vias Terciarias</td>
          </tr>
          <tr>
            <td class="font-weight-bold">Municipio:</td>
            <td class="">Sabanalarga</td>
            <td class="font-weight-bold">Corregimiento:</td>
            <td class="">El carmen</td>
          </tr>
        </table>
        <div class="container border">
          <h4 class="text-dark text-center mb-0 mt-1">Resumen Ejecutivo</h4><br>
          <div class="row mb-1">
              <div class="col-md-4 mb-1">
               <h6 class="text-right font-weight-bold text-dark m-0 p-0">Presupuestado</h6> <br>
               <h6 class="text-right font-weight-bold text-dark m-0 p-0">Ejecutado</h6> <br>
               <h6 class="text-right font-weight-bold text-dark m-0 p-0">Interventoria</h6>
              </div>
            <div class="col-md-8">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><b class="text-ligth">60%</b></div>
              </div><br>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><b class="text-dark">30%</b></div>
              </div><br>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><b class="text-ligth">15%</b></div>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="row align-items-center text-center">
            <div class="col-md-3">
              <a href="diagrama"><i class="fa fa-tasks text-dark text-center fa-4x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3">
              <a href="proyecto-mapa"><i class="fa fa-map-marker text-dark text-center fa-4x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3">
              <a data-toggle="modal" data-target="#documentModal"><i class="fa fa-file text-dark text-center fa-4x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3">
              <a data-toggle="modal" data-target=".bd-example-modal-lg" href="galeria"><i class="fa fa-film text-dark text-center fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
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

  <!-- Modal -->
<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="documentModalLabel">Documentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card-deck">
          <div class="card p-2">
            <img class="card-img-top p-0" src="{{ asset('images/pdficon.png')}}" alt="Card image cap">
            <div class="card-body p-0">
              <h5 class="card-title p-0">Contrato</h5>
              <p class="card-text p-0"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card p-2">
            <img class="card-img-top p-0" src="{{ asset('images/pdficon.png')}}" alt="Card image cap">
            <div class="card-body p-0">
              <h5 class="card-title p-0">CPB</h5>
              <p class="card-text p-0"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card p-2">
            <img class="card-img-top p-0" src="{{ asset('images/pdficon.png')}}" alt="Card image cap">
            <div class="card-body p-0">
              <h5 class="card-title p-0">Reporte</h5>
              <p class="card-text p-0"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediaModalLabel">Multimedia</h5>
        <button type="button" data-target=".bd-media-modal-lg" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
              <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://cms-gauib.s3.eu-central-1.amazonaws.com/noticias/imagenes/EuroTaller%2C_obras%2C_carretera%2C_mantenimiento._conducci%C3%B3n_1540806476.jpg?v=125" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://imagenes.milenio.com/YmEcFlKVNfcwTut6Bh1kKmOohPU=/958x596/https://www.milenio.com/uploads/media/2018/08/28/trabajos-obra-carretera-gloria-san_0_26_875_544.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider r.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://img.gruporeforma.com/imagenes/elementorelacionado/8/150/7149294.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text b.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/5wIN9zcHohOzqTv6WPOpbdQ7i3HbKIIhiQYeH8EVBS2fD1A1UVXWlCBljuRWuiXg6s0nJvXNG_wR6Da_SO2MX-d7Kyp8AeaXB0uaqt-mQuvMTfMlNw" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text be</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://www.circulaseguro.com/wp-content/uploads/2015/03/obras.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text .</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://www.domingoloro.com/images/play-video-7.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text bel </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Reproducir</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="{{ asset('js/app.js') }}" defer></script>
