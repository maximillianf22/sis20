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
  <link href="https://playground.anychart.com/gallery/Gantt_General_Features/Custom_Drawing/iframe" rel="canonical">
  <meta content="Custom Drawing,Gantt Chart,Gantt Project Chart,Graphics,Project Management,Tooltip" name="keywords">
  <meta content="AnyChart - JavaScript Charts designed to be embedded and integrated" name="description">
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" rel="stylesheet" type="text/css">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" rel="stylesheet" type="text/css">
  <style>   html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .anychart-tooltip {
      background: #fff;
      padding: 15px;
      color: #333;
      box-shadow: 1px 1px 3px #333;
    }

    .anychart-tooltip h4 {
      margin-bottom: 0;
    }

    .anychart-tooltip ul {
      margin: 0;
    }</style>
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
            <form>
              <input class="btn btn-lg btn-warning" type="button" value="Proyecto" onclick="history.back()">
            </form>
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
          <div class="col-lg-1">
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
  <div id="container"></div>

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
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-gantt.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
  <script src="https://cdn.anychart.com/samples-data/gantt-general-features/custom-drawing/gantt-custom-drawing.js"></script>
  <script type="text/javascript">   


    var scale, timeline;

    anychart.onDocumentReady(function () {
      // The data used in this sample can be obtained from the CDN
      // https://cdn.anychart.com/samples-data/gantt-general-features/custom-drawing/gantt-custom-drawing.js
      var treeData = anychart.data.tree(getData(), 'as-table');

      // map loaded data for the gantt project chart
      var mapping = treeData.mapAs({
        'actualStart': 'mostLikelyStart',
        'actualEnd': 'mostLikelyEnd'
      });

      // create gantt project chart
      var chart = anychart.ganttProject();

      // set data for the chart
      chart.data(mapping);

      // set chart row's height
      chart.defaultRowHeight(60);

      // get data grid
      var dataGrid = chart.dataGrid();

      // set data grid tooltip's formatter
      dataGrid.tooltip().useHtml(true);
      dataGrid.tooltip().format(tooltipFormatter);

      //get timeline
      timeline = chart.getTimeline();

      // set timeline tooltip's formatter
      timeline.tooltip().useHtml(true);
      timeline.tooltip().format(tooltipFormatter);

      // set default task bar and progress fill settings
      timeline.tasks().selected().fill('#45738B');
      timeline.tasks().progress().selected().fill('#47B7F2');

      timeline.groupingTasks().labels()
        .padding(0, 0, 5, 0)
        .position('center')
        .anchor('center');

      timeline.groupingTasks().labels().format(function () {
        return 'Duration: ' + Math.round((this.autoEnd - this.autoStart) / (24 * 60 * 60 * 1000)) + ' days'
      });

      //set shapes for timeline tasks rendering
      timeline.tasks().rendering().shapes([{
          name: 'pessimisticTask',
          shapeType: 'path',
          disablePointerEvents: false
        },
        {
          name: 'mostLikelyTask',
          shapeType: 'path',
          disablePointerEvents: false
        },
        {
          name: 'optimisticTask',
          shapeType: 'path',
          disablePointerEvents: false
        }
      ]);

      timeline.groupingTasks().rendering().shapes([{
        name: 'mostLikelyTask',
        shapeType: 'path',
        disablePointerEvents: false
      }]);

      // get timeline's scale
      scale = timeline.scale();

      // setup custom drawer for timeline tasks
      timeline.tasks().rendering().drawer(taskDrawer);

      // setup custom drawer for timeline grouping tasks
      timeline.groupingTasks().rendering().drawer(groupingTasksDrawer);

      // set task progress' settings
      timeline.tasks().progress()
        .height('15%')
        .selected().stroke('#666 .6');

      // set grouping task progress' settings
      timeline.groupingTasks().progress()
        .height('50%')
        .fill('#0078CD .7')
        .offset('50%')
        .selected().fill('#47B7F1 .7');

      // set container id for the chart
      chart.container('container');

      // initiate chart drawing
      chart.draw();

      // Set scale maximum and minimum.
      scale.minimumGap(0.08);
      scale.maximumGap(0.15);

      // zoom chart all dates range
      chart.fitAll();
    });

    // custom drawer for the tasks
    function taskDrawer() {
      var path, shift,
        left, top, width, height,
        itemBounds, startRatio, endRatio

      // get timeline width and left border coordinates
      var tlBounds = timeline.getPixelBounds();
      var tlWidth = tlBounds.width;
      var tlLeft = tlBounds.left;

      // get recommended bounds for drawing
      var bounds = this.predictedBounds;

      // get bar height
      var barHeight = Math.round(bounds.height / 3);

      /* OPTIMISTIC BAR */
      // get path from shapes
      path = this.shapes['optimisticTask'];

      //set path's fill and stroke settings
      path.fill('#90D6C1 .6');
      path.stroke('#80A291 .8');

      // get shift value
      shift = halfShift(path.strokeThickness());

      // calculate start and end ratio for the optimistic bar using it's data
      startRatio = scale.transform(this.item.get('optimisticStart'));
      endRatio = scale.transform(this.item.get('optimisticEnd'));

      // calculate X coordinate for the optimistic bar
      left = Math.round(tlWidth * startRatio + tlLeft) + shift;

      // calculate Y coordinate for the optimistic bar
      top = Math.round(bounds.top) - 4 + shift;

      // calculate optimistic bar's width
      width = Math.round(tlWidth * (endRatio - startRatio));

      // set optimistic bar's height
      height = barHeight;

      //set optimistic bar's bounds
      itemBounds = anychart.math.rect(left, top, width, height);

      // draw rounded rectangle on the path
      anychart.graphics.vector.primitives.roundedRect(path, itemBounds, 3);

      /* MOST LIKELY BAR */
      //get path prom shapes
      path = this.shapes['mostLikelyTask'];

      // set stroke color and opacity
      path.stroke('#666 .6');

      // get shift value
      shift = halfShift(path.strokeThickness());

      // calculate start and end ratio for the most-likely bar using it's data
      startRatio = scale.transform(this.item.get('mostLikelyStart'));
      endRatio = scale.transform(this.item.get('mostLikelyEnd'));

      // calculate X coordinate for the most-likely bar
      left = Math.round(tlWidth * startRatio + tlLeft) + shift;

      // calculate Y coordinate for the most-likely bar
      top = Math.round(bounds.top + (bounds.height - barHeight) / 2) - 1 + shift;

      // calculate most-likely bar's width
      width = Math.round(tlWidth * (endRatio - startRatio));

      // set most-likely bar's height
      height = barHeight;

      //set most-likely bar's bounds
      itemBounds = anychart.math.rect(left, top, width, height);

      // draw rounded rectangle on the path
      anychart.graphics.vector.primitives.roundedRect(path, itemBounds, 3);

      /* PESSIMISTIC BAR */
      // get path from shapes
      path = this.shapes['pessimisticTask'];

      //set path's fill and stroke settings
      path.fill('#FF4B12 .4');
      path.stroke('#6F5264 .6');

      // get shift value
      shift = halfShift(path.strokeThickness());

      // calculate start and end ratio for the pessimistic bar using it's data
      startRatio = scale.transform(this.item.get('pessimisticStart'));
      endRatio = scale.transform(this.item.get('pessimisticEnd'));

      // calculate X coordinate for the pessimistic bar
      left = Math.round(tlWidth * startRatio + tlLeft) + shift;

      // calculate Y coordinate for the pessimistic bar
      top = Math.round(bounds.top + bounds.height - barHeight + 2) + shift;

      // calculate pessimistic bar's width
      width = Math.round(tlWidth * (endRatio - startRatio)) + shift;

      // set pessimistic bar's height
      height = barHeight;

      //set pessimistic bar's bounds
      itemBounds = anychart.math.rect(left, top, width, height);

      // draw rounded rectangle on the path
      anychart.graphics.vector.primitives.roundedRect(path, itemBounds, 3);
    }

    // custom drawer for the grouping tasks
    function groupingTasksDrawer() {

      // get path prom shapes
      var path = this.shapes['mostLikelyTask'];

      // set path stroke settings
      path.stroke({
        dash: '3 7 2',
        thickness: 5,
        color: '#385960'
      });

      // get shift value
      var shift = halfShift(path.strokeThickness());

      // get recommended bounds for drawing
      var bounds = this.predictedBounds;

      // get parameters for the element drawer
      var left = Math.round(bounds.left) + shift,
        height = Math.round(bounds.height),
        center = Math.round(height / 2),
        top = Math.round(bounds.top + center - 2) + shift,
        width = Math.round(bounds.width),
        right = left + width,
        bottom = top + height;

      // draw grouping task
      path.moveTo(left, top + center)
        .lineTo(right, top + center)
        .close();
    }

    // formatter function for the tooltips
    function tooltipFormatter() {
      if (!this.item.numChildren()) { // formatter for the timeline task
        return '<h4 style="color: #80A291">Optimistic (' +
          Math.round((this.item.get('optimisticEnd') - this.item.get('optimisticStart')) / (24 * 60 * 60 * 1000)) +
          ' days):</h4><ul><li>Start - ' +
          anychart.format.dateTime(this.item.get('optimisticStart'), 'dd.MM.yyyy') +
          '</li><li>End - ' +
          anychart.format.dateTime(this.item.get('optimisticEnd'), 'dd.MM.yyyy') +
          '</li></ul>' + '<hr>' +
          '<h4 style="color: #00A6DA">Most Likely (' +
          Math.round((this.item.get('mostLikelyEnd') - this.item.get('mostLikelyStart')) / (24 * 60 * 60 * 1000)) +
          ' days):</h4><ul><li>Start - ' +
          anychart.format.dateTime(this.item.get('mostLikelyStart'), 'dd.MM.yyyy') +
          '</li><li>End - ' +
          anychart.format.dateTime(this.item.get('mostLikelyEnd'), 'dd.MM.yyyy') +
          '</li></ul><hr>' +
          '<h4 style="color: #E24B26">Pessimistic (' +
          Math.round((this.item.get('pessimisticEnd') - this.item.get('pessimisticStart')) / (24 * 60 * 60 * 1000)) +
          ' days):</h4><ul><li>Start - ' +
          anychart.format.dateTime(this.item.get('pessimisticStart'), 'dd.MM.yyyy') +
          '</li><li>End - ' +
          anychart.format.dateTime(this.item.get('pessimisticEnd'), 'dd.MM.yyyy') +
          '</li></ul>'
      } else { // formatter for the grouping task
        return 'Duration: ' + Math.round((this.autoEnd - this.autoStart) / (24 * 60 * 60 * 1000)) + ' days'
      }
    }

    function halfShift(strokeThickness) {
      return (strokeThickness % 2) ? .5 : 0;
    }</script>
 </body>
</html>
</section>
<script src="{{ asset('js/app.js') }}" defer></script>








      