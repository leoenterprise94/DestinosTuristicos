<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Destino Turisticos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Destinos Turisticos</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Mantenimiento</p>
                <li class="active">
                    <a href="#lugarSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Lugar</a>
                    <ul class="collapse list-unstyled" id="lugarSubmenu">
                        <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalListadoLugares" style="width:200px;">
                            Listado Lugares</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNuevoLugar" style="width:200px;">
                            Nuevo Lugar</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificarLugar" style="width:200px;">
                            Modificar Lugar</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEliminarLugar" style="width:200px;">
                            Eliminar Lugar</button>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#ofertaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ofertas</a>
                    <ul class="collapse list-unstyled" id="ofertaSubmenu">
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalListadoOfertas" style="width:200px;">
                            Listado Ofertas</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNuevaOferta" style="width:200px;">
                            Nueva Oferta</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificarOferta" style="width:200px;">
                            Modificar Oferta</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEliminarOferta" style="width:200px;">
                            Eliminar Oferta</button>
                        </li>
                    </ul>
                </li>
               
                <li class="active">
                    <a href="#contactoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contactos</a>
                    <ul class="collapse list-unstyled" id="contactoSubmenu" >
                        <li>
         
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificarMsjCont" style="width:200px;">
                            Modificar Mensaje</button>

                        </li>
                        <li>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNuevoContacto" style="width:200px;">
                            Nuevo Contacto</button>

                        </li>
                        <li>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificarContacto" style="width:200px;">
                            Modificar Contacto</button>

                        </li>
                        <li>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEliminarContacto" style="width:200px;">
                            Eliminar Contacto</button>

                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#acercaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Acerca de Nosotros</a>
                    <ul class="collapse list-unstyled" id="acercaSubmenu">
                        <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificarMsjAcercaNosotros" style="width:200px;">
                            Modificar Mensaje</button>
                        </li>
                    </ul>
                </li>
            </ul>
<!-- Modals -->
        </nav>
       
        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Google Maps</h2>

            <div id="googleMap" style="width:100%;height:400px;"></div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

 
    <script type="text/javascript">

        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(9.9372571, -84.7553369),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUCb18wwYDgkfPwj4NI8V3WCFm7tMpL-0&callback=myMap"></script>

    <style>
        /*
    DEMO STYLE
*/
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            perspective: 1500px;
        }


        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: bottom left;
        }

        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }


        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }



        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
            cursor: pointer;
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            transition-delay: 0.2s;
        }

        #sidebarCollapse span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse span:nth-of-type(2) {
            opacity: 0;
        }

        #sidebarCollapse span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }


        #sidebarCollapse.active span {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }


        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
                transform: rotateY(90deg);
            }

            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            #sidebarCollapse.active span {
                margin: 0 auto;
            }

            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }

            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }

            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }

        }
    </style>
</body>

<!--                             Modals Lugares                                      -->

<div class="modal" id="ModalListadoLugares">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Listado Lugares</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
<?php 

    $mysqli = new mysqli("163.178.173.144","multi-paraiso","multimedios.rp.2017", "ADLRtourism");    
    $resultado = $mysqli->query("SELECT * FROM Lugar");
?>
<div class="modal-body">
    <table class="table table-dark">
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Provincia</th>
            <th>Descripcion</th>
            <th>Tipo lugar</th>
            <th>Tipo acceso</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($filas= $resultado->fetch_row()){       
             ?>
            <tr>
            <td><<?php echo $filas['nombre'] ?></td>
            <td><?php echo $filas['provincia'] ?></td>
            <td><?php echo $filas['descripcion'] ?></td>
            <td><?php echo $filas['tipoLugar'] ?></td>
            <td><?php echo $filas['tipoAcceso'] ?></td>
            </tr>
            <<?php } ?>
    </tbody>
  </table>
</div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalNuevoLugar">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo Lugar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
     <div class="row">
     
     <div class="col-sm-6">

<div class="form-group">
  <label for="provincia">Provincia:</label>
  <input type="text" class="form-control" name="provincia" id="provincia">
</div>

<div class="form-group">
  <label for="lat">Paralelo o Latitud:</label>
  <input type="text" class="form-control" name="latitud" id="lat">
    </div>

     </div>
     
     <div class="col-sm-6">

     <div class="form-group">
  <label for="nombreLugar">Nombre del Lugar:</label>
  <input type="text" class="form-control" name="nombre" id="nombreLugar">
    </div>

    

    <div class="form-group">
  <label for="lon">Meridiano o Longitud:</label>
  <input type="text" class="form-control" name="longitud" id="lon">
    </div>

     </div>

     </div>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-group">
  <label for="descripcion">Descripcion:</label>
  <textarea class="form-control" rows="2" name="descripcion" id="descripcion"></textarea>
     </div>
     </div>
     </div>

     <label for="acceso">Tipos de Acceso:</label>

     <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select" name="tipoAcceso">
  <option value="Caminando">Caminando</option>
  <option value="Bicicleta">Bicicleta</option>
  <option value="Vehiculo">Vehículo</option>
</select>
     </div>
     </div>

     <label for="acceso">Tipos de Lugar:</label>

     <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select" name="tipoLugar">
  <option value="Montaña">Montaña</option>
  <option value="Playa">Playa</option>
  <option value="Reserva">Reserva Natural</option>
</select>
     </div>
     </div>
     
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Nuevo Lugar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <<?php 
    $mysqli = new mysqli("163.178.172.144", "multi-paraiso", "multimedios.rp.2017", "ADLRtourism");    
    $resultado = $mysqli->query("SELECT * FROM Lugar");

    $provincia = $_GET['nombreLugar'];
    $nombre = $_GET['nombreLugar'];
    $latitud = $_GET['latitud'];
    $longitud = $_GET['longitud'];
    $descripcion = $_GET['descripcion'];
    $tipoAcceso = $_GET['tipoAcceso'];
    $tipoLugar = $_GET['tipoLugar'];

    $sqlInsertar = "INSERT INTO Lugar VALUES('".$provincia."','".$nombre."','".$latitud."','".$longitud."','".$descripcion."','".$tipoAcceso."','".$tipoLugar."')";  

    $mysqli->query($sqlInsertar);                

   ?>

  <div class="modal" id="ModalModificarLugar">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Lugar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
<div class="modal-body">

 <label for="idLugar">Seleccione el Lugar a Modificar:</label>

     <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select">
  <option value="1">San Jose, Montes de Oca</option>
  <option value="2">Guanacaste, Playa Tamarindo</option>
  <option value="3">Heredia,Ciudad Colon</option>
</select>
     </div>
     </div>
        
        <div class="row">
     
     <div class="col-sm-6">

<div class="form-group">
  <label for="provincia">Provincia:</label>
  <input type="text" class="form-control" id="provincia">
</div>

<div class="form-group">
  <label for="canton">Canton:</label>
  <input type="text" class="form-control" id="canton">
</div>

<div class="form-group">
  <label for="distrito">Distrito:</label>
  <input type="text" class="form-control" id="distrito">
</div>
     </div>
     
     <div class="col-sm-6">

     <div class="form-group">
  <label for="nombreLugar">Nombre del Lugar:</label>
  <input type="text" class="form-control" id="nombreLugar">
    </div>

    <div class="form-group">
  <label for="lat">Paralelo o Latitud:</label>
  <input type="text" class="form-control" id="lat">
    </div>

    <div class="form-group">
  <label for="lon">Meridiano o Longitud:</label>
  <input type="text" class="form-control" id="lon">
    </div>

     </div>

     </div>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-group">
  <label for="descripcion">Descripcion:</label>
  <textarea class="form-control" rows="2" id="descripcion"></textarea>
     </div>
     </div>
     </div>

     <label for="acceso">Tipos de Acceso:</label>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Caminando
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Bicicleta
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">4x4
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Sedan
  </label>
</div>
     </div>
     </div>

     <label for="acceso">Tipos de Lugar:</label>

     <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select">
  <option value="1">Montaña</option>
  <option value="2">Playa</option>
  <option value="3">Ciudad</option>
  <option value="4">Historico</option>
  <option value="5">Reserva Natural</option>
</select>
     </div>
     </div>

     <label for="acceso">Imagen:</label>
     <div class="row">
     <div class="col-sm-12">
<input type="file" class="form-control-file border">
     </div>
     </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Modificar Lugar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalEliminarLugar">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Lugar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <label for="idEliminarLugar">Seleccione el Lugar a Eliminar:</label>
        <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select">
  <option value="1">San Jose, Montes de Oca</option>
  <option value="2">Guanacaste, Playa Tamarindo</option>
  <option value="3">Heredia,Ciudad Colon</option>
</select>
     </div>
     </div>

        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Eliminar Lugar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!--                             Modals Ofertas                                       -->
<div class="modal" id="ModalListadoOfertas">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Listado Ofertas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <table class="table table-dark">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2x1 Piscinas</td>
        <td>Cartago, Orosi</td>
        <td>Paga una persona y dos tienen acceso a las instalaciones</td>
      </tr>

      <tr>
        <td>Tour San Jose Antiguo</td>
        <td>San Jose, Montes de Oca</td>
        <td>Museos,comidas tipicas</td>
      </tr>
      
    </tbody>
  </table>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalNuevaOferta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nueva Oferta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
     
        <div class="row">
     
     <div class="col-sm-6">

<div class="form-group">
  <label for="nombreOferta">Nombre de la Oferta:</label>
  <input type="text" class="form-control" id="nombreOferta">
</div>

<div class="form-group">
  <label for="lugar">Lugar:</label>
  <input type="text" class="form-control" id="lugar">
</div>

<div class="form-group">
  <label for="dueno">Dueño:</label>
  <input type="text" class="form-control" id="dueno">
</div>
     </div>
     
     <div class="col-sm-6">

     <div class="form-group">
  <label for="nombreLugar">Fecha Inicio:</label>
  <input type="date" id="datepicker" width="276" />
    </div>

    <div class="form-group">
  <label for="lat">Fecha Fin:</label>
  <input type="date" id="datepicker" width="276" />
    </div>

     </div>

     </div>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-group">
  <label for="descripcion">Descripcion:</label>
  <textarea class="form-control" rows="2" id="descripcion"></textarea>
     </div>
     </div>
     </div>

     <label for="acceso">Servicios:</label>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Todo Incluido
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Transporte
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Dos Comidas
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Hospedaje
  </label>
</div>
     </div>
     </div>

     <label for="idEliminarLugar">Cantidad Personas:</label>
        <div class="row">
     <div class="col-sm-12">
     <input type="number" class="" value="">
     </div>
     </div>

     <label for="idEliminarLugar">Precio:</label>
        <div class="row">
     <div class="col-sm-12">
     $<input type="number" class="" value="">
     </div>
     </div>

     <label for="acceso">Imagen:</label>
     <div class="row">
     <div class="col-sm-12">
<input type="file" class="form-control-file border">
     </div>
     </div>

        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Nueva Oferta</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalModificarOferta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Oferta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
     
        <label for="idEliminarLugar">Seleccione la Oferta a Modificar:</label>
        <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select">
  <option value="1">2x1 Aguas Termales</option>
  <option value="2">Tour San Jose Antiguo</option>
</select>
     </div>
     </div>

        <div class="row">
     
     <div class="col-sm-6">

<div class="form-group">
  <label for="nombreOferta">Nombre de la Oferta:</label>
  <input type="text" class="form-control" id="nombreOferta">
</div>

<div class="form-group">
  <label for="lugar">Lugar:</label>
  <input type="text" class="form-control" id="lugar">
</div>

<div class="form-group">
  <label for="dueno">Dueño:</label>
  <input type="text" class="form-control" id="dueno">
</div>
     </div>
     
     <div class="col-sm-6">

     <div class="form-group">
  <label for="nombreLugar">Fecha Inicio:</label>
  <input type="date" id="datepicker" width="276" />
    </div>

    <div class="form-group">
  <label for="lat">Fecha Fin:</label>
  <input type="date" id="datepicker" width="276" />
    </div>

     </div>

     </div>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-group">
  <label for="descripcion">Descripcion:</label>
  <textarea class="form-control" rows="2" id="descripcion"></textarea>
     </div>
     </div>
     </div>

     <label for="acceso">Servicios:</label>

     <div class="row">
     <div class="col-sm-12">
     <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Todo Incluido
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Transporte
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Dos Comidas
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Hospedaje
  </label>
</div>
     </div>
     </div>

     <label for="idEliminarLugar">Cantidad Personas:</label>
        <div class="row">
     <div class="col-sm-12">
     <input type="number" class="" value="">
     </div>
     </div>

     <label for="idEliminarLugar">Precio:</label>
        <div class="row">
     <div class="col-sm-12">
     $<input type="number" class="" value="">
     </div>
     </div>

     <label for="acceso">Imagen:</label>
     <div class="row">
     <div class="col-sm-12">
<input type="file" class="form-control-file border">
     </div>
     </div>

        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Modificar Oferta</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalEliminarOferta">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Oferta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        <label for="idEliminarLugar">Seleccione la Oferta a Eliminar:</label>
        <div class="row">
     <div class="col-sm-12">
     <select class="browser-default custom-select">
  <option value="1">2x1 Aguas Termales</option>
  <option value="2">Tour San Jose Antiguo</option>
</select>
     </div>
     </div>
     
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Eliminar Oferta</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modals Contactos -->

<div class="modal" id="ModalModificarMsjCont">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Mensaje Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        <label for="comment">Mensaje:</label>

        <div class="form-group">
               
               <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder="Puede Contactarnos en los siguientes numeros,correos u oficinas"></textarea>
                </div>

        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Cambiar Mensaje</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalNuevoContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
        <label for="comment">Seleccione el tipo de Contacto</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico</option>
  <option value="Lugar">Dirección Oficina</option>
  <option value="Telefono">Numero Telefonico</option>
</select>
        </div>

        <label for="comment">Ingrese el valor</label>
        <div class="form-group">
          <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder=""></textarea>
                </div>

        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Nuevo Contacto</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalEliminarContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <label for="comment">Seleccione el Contacto que desea eliminar</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico, bermudez@hotmail.com</option>
  <option value="Lugar">Dirección Oficina, De la Iglesia San Bosco 200 mts Sur</option>
  <option value="Telefono">Numero Telefonico, 75059802</option>
     </select>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Eliminar Contacto</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  <div class="modal" id="ModalModificarContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        <label for="comment">Seleccione el Contacto que desea Modificar</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico, bermudez@hotmail.com</option>
  <option value="Lugar">Dirección Oficina, De la Iglesia San Bosco 200 mts Sur</option>
  <option value="Telefono">Numero Telefonico, 75059802</option>
     </select>
</div>

        <label for="comment">Seleccione el tipo de Contacto</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico</option>
  <option value="Lugar">Dirección Oficina</option>
  <option value="Telefono">Numero Telefonico</option>
</select>
        </div>

        <label for="comment">Ingrese el valor</label>
        <div class="form-group">
          <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder=""></textarea>
                </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Modificar Contacto</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!--                      Modals Acerca de Nosotros                                      -->

  <div class="modal" id="ModalModificarMsjAcercaNosotros">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Mensaje Acerca de Nosotros</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        <label for="comment">Mensaje:</label>

        <div class="form-group">
               
               <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder="Somos una empresa al servicio del costarricense desde el 2019."></textarea>
                </div>

        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Cambiar Mensaje</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</html>