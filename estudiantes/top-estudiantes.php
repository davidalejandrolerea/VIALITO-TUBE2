<!doctype html>
<html lang="Es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Administracion WEB">
    

    <title>Administración</title>

    <!-- Bootstrap core CSS -->
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../fonts/css/fontawesome-all.css" crossorigin="anonymous">


<script defer src="../fonts/js/fontawesome-all.js"></script>
<script type="text/javascript">
  function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
tinymce.init({
  selector: 'textarea',
  height: 200,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen','emoticons',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | emoticons '
});

    </script>
<style>

.footer {

width: 100%;
position: fixed; /* Fija el contenedor a una posición */
bottom: 0px; /* El div se sitúa abajo */
z-index: 10; /* Lo muestra por encima de otros div */

 }

</style>
</head>
<body onload="deshabilitaRetroceso()" style="background: rgba(226,226,226,1);
background: -moz-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(161,158,161,1) 50%, rgba(166,161,166,1) 51%, rgba(254,254,254,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226,226,226,1)), color-stop(50%, rgba(161,158,161,1)), color-stop(51%, rgba(166,161,166,1)), color-stop(100%, rgba(254,254,254,1)));
background: -webkit-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(161,158,161,1) 50%, rgba(166,161,166,1) 51%, rgba(254,254,254,1) 100%);
background: -o-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(161,158,161,1) 50%, rgba(166,161,166,1) 51%, rgba(254,254,254,1) 100%);
background: -ms-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(161,158,161,1) 50%, rgba(166,161,166,1) 51%, rgba(254,254,254,1) 100%);
background: linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(161,158,161,1) 50%, rgba(166,161,166,1) 51%, rgba(254,254,254,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 );">

<?php
include("../conexion.php");

$consult="SELECT * FROM dat_admin WHERE ci='$usuario' ";
$resultad=$link->query($consult);
         while ($row=$resultad->fetch_assoc()) {
             $id=$row['id'];
             $aps=$row['ap'];
             $ams=$row['am'];
             $noms=$row['nom'];
             $nivel=$row['nivel'];
             $curso=$row['curso'];
             $paralelo=$row['paralelo'];
             $foto=$row['foto'];
             $colegio=$row['colegio'];
 }          
             ?>
<!--hasta aqui-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h3> <i class='fab fa-youtube-square mr-0' style='font-size:24px' ></i> VIALITO-TUBE</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active text-center">
        <a class="nav-link" href="#">v 2.0<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active text-center">
        <?php echo "<a href='principal.php' class='btn btn-warning btn-lg mr-3' role='button' aria-pressed='true'><i class='far fa-home'></i> Inicio</a> ";?>
      </li>
      <li class="text-center">
        <?php echo "<a href='trabajos_lista.php?nivel=$nivel&curso=$curso&paralelo=$paralelo' class='btn btn-outline-primary btn-lg' role='button' aria-pressed='true'><i class='fal fa-file-alt'></i> Trabajos</a> ";?>
      </li>
      <li class="text-center">
        <?php echo "<a href='pass.php' class='nav-link btn btn-danger text-white btn-lg ml-3' role='button' aria-pressed='true'><i class='fab fa-youtube-square mr-0'></i> VIDEOS</a> ";?>

        
      </li>
      <li class="text-center">
        <?php echo "<a href='foro_lista.php?nivel=$nivel&curso=$curso&paralelo=$paralelo' class='btn btn-outline-success btn-lg ml-3' role='button' aria-pressed='true'><i class='fal fa-comments'></i> Foros</a> ";?>
      </li>


    </ul>

        <div class="text-center">
      <a href="../cerrarsesion.php" class="btn btn-outline-danger my-2 my-sm-0"><h4><i class="fal fa-sign-out-alt"></i> Salir</h4></a>
        </div>
  </div>
</nav>
    <!--<body>-->