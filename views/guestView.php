<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Destinos Turisticos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Vista de Invitado</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Informacion</p>
       
                <li>
                    <a href="#">Acerca de Nosotros</a>
                </li>
                <li>
                    <a href="#">Contactanos</a>
                </li>
            </ul>

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
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">Sign in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <h2>Google Maps</h2>



<form name="estilo" method="post"  >      
<div class="form-group">
<label for="provincia">Provincia:</label>
<input type="text" class="form-control" name="Provincia" id="idProvincia">
</div>

<div class="form-group">
  <label for="provincia">Tipo de actividad:</label>
  <input type="text" class="form-control" name="Actividad" id="idActividad">
</div>

<div class="form-group">
  <label for="provincia">Tipo de acceso:</label>
  <input type="text" class="form-control"  name="Acceso" id="idAcceso">
</div>
  <font size="4"></font><button type="submit" name="calcular" onclick="obtainPlace()">Buscar</button> 
</form>

<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("conexion.php");
$request = "SELECT * FROM Lugar";
$data = mysqli_query($conexion, $request);
  $array = array();
$provincia = $_POST['Provincia'];
$actividad = $POST['Actividad'];
$acceso = $_POST['Acceso'];    

 $flag = false;// Primera llave
 $flagfind = false; //Segunda llave   
while ($fila = mysqli_fetch_array($data)){



if($provincia == "Cartago"){
   $inprovincia = 1;
}else 
if($provincia  == "Heredia"){
  $inprovincia = 2;
}else
if($provincia  == "San José"){
  $inprovincia = 3;
}else
if($provincia == "Limón"){
  $inprovincia = 4;
}else
if($provincia  == "Puntarenas"){
   $inprovincia = 5;
}else
if($provincia == "Guanacaste"){
  $inprovincia = 6;
}else
if($provincia  == "Alajuela"){
   $inprovincia = 7;
}

if($fila['provincia'] == "Cartago"){
   $numProvincia = 1;
}else 
if($fila['provincia']  == "Heredia"){
  $numProvincia = 2;
}else
if($fila['provincia']  == "San José"){
  $numProvincia = 3;
}else
if($fila['provincia'] == "Limón"){
  $numProvincia = 4;
}else
if($fila['provincia']  == "Puntarenas"){
   $numProvincia = 5;
}else
if($fila['provincia']  == "Guanacaste"){
  $numProvincia = 6;
}else
if($fila['provincia']  == "Alajuela"){
   $numProvincia = 7;
}

if($actividad == "Montaña"){
   $innumActividad = 1;
}else 
if($actividad == "Playa"){
  $innumActividad = 2;
}else
if($actividad == "Reserva"){
  $innumActividad = 3;
}


if($fila['tipoLugar']  == "Montaña"){
   $numActividad = 1;
}else 
if($fila['tipoLugar']  == "Playa"){
  $numActividad = 2;
}else
if($fila['tipoLugar'] == "Reserva"){
  $numActividad = 3;
}

if($acceso == "Caminando"){
   $innumAcceso = 1;
}else 
if( $acceso == "Bicicleta"){
  $innumAcceso = 2;
}else
if($acceso  == "Vehiculo"){
  $innumAcceso = 3;
}

if($fila['tipoAcceso']  == "Caminando"){
   $numAcceso = 1;
}else 
if( $fila['tipoAcceso'] == "Bicicleta"){
  $numAcceso = 2;
}else
if($fila['tipoAcceso']  == "Vehiculo"){
  $numAcceso = 3;
}


$menoscercano = sqrt(pow($numProvincia - $inprovincia ,2) + pow($numActividad  - $innumActividad,2) + pow($numAcceso -  $innumAcceso ,2));
 
 if($flag == false && $flagfind == false){
 $mascercano = $menoscercano;
 $la =  $fila['latitud']; 
 $lo =  $fila['longitud']; 
   /* $ubicacion = $latitud+";"+$longitud;
   array_push($array,$longitud);*/
 $flag = true;
 }
 if(($mascercano > $menoscercano && $menoscercano > 0) && $flagfind = false){
    $flagfind = false;
    $la=   $fila['latitud']; 
    $lo =  $fila['longitud'];
     /* $ubicacion = $latitud+";"+$longitud;
   array_push($array,$longitud);*/
    $mascercano = $menoscercano;   
 }

if($mascercano== 0.000 || $menoscercano == 0.000){
 echo $la = $fila['latitud']; 
  echo  $lo =  $fila['longitud'];   
  /* $ubicacion = $latitud+";"+$longitud;
   array_push($array,$longitud);*/
  $flagfind = true;
}
}
  $latitu = $la;
  $longitu =$lo;
?>



</script>
     
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
     
     //var  ubicacion = [10.65,-85.8];

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });


       function obtainPlace() {

     var lati = "<?php echo $latitu;?>";
   var long = "<?php echo $longitu;?>";

 var l = parseFloat(lati);
 var lo = parseFloat(long);
           var mapProp = {
                center: new google.maps.LatLng( l,lo),
                zoom: 8,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
             
             var place  = {
                lat: l,
                lng: lo
                
            };
            var marke = new google.maps.Marker({position:place,map:map,title:"ubicacion"})
    
        }

        function myMap() {
          var mapProp = {
                center: new google.maps.LatLng(9.9372571, -84.7553369),
                zoom: 8,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>

<?php If (null != $_POST['Provincia'])
{
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUCb18wwYDgkfPwj4NI8V3WCFm7tMpL-0&callback=obtainPlace"></script>

    <?php } ?>
<?php If (null == $_POST['Provincia'])
{
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUCb18wwYDgkfPwj4NI8V3WCFm7tMpL-0&callback=myMap"></script>

    <?php } ?>
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

a, a:hover, a:focus {
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

#sidebar ul li.active > a, a[aria-expanded="true"] {
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

a.article, a.article:hover {
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

</html>