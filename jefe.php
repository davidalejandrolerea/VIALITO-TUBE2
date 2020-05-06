<!doctype html>
<html lang="Es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/css/fontawesome-all.css" crossorigin="anonymous">
    <script defer src="fonts/js/fontawesome-all.js"></script>

    <title>Evaluaciones</title>
<style>
.footer {

width: 100%;
position: fixed; /* Fija el contenedor a una posición */
bottom: 0px; /* El div se sitúa abajo */
z-index: 10; /* Lo muestra por encima de otros div */

 }

</style>
  </head>
  <body style="background-image: url(imagenes/formosa.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #66999;">
 <!--container -->   
<div class="container-fluid" style="background-color: rgba(20, 22, 19, 0.6);">
 <nav class="navbar navbar-expand-lg navbar-dark container p-4" style="background-color: rgba(20, 22, 19, 0.2);">
  <a class="navbar-brand" href="#"><i class="fal fa-edit fa-2x"></i> VIALITO <font class='text-warning'>Plataforma </font>v3.0</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php
mt_srand(time());
$digitos = '';
for($i = 0; $i < 16; $i++){
   $digitos .= mt_rand(0,9);
}
;?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
       
      </li>

       <li class="nav-item active">
        <a class="nav-link btn btn-outline-warning p-3 ml-2" href="index.php" ><i class="far fa-home"></i> Inicio</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link btn btn-outline-primary p-3 ml-2" href="#" ><i class="far fa-coffee"></i> Registro</a>
      </li>

      <li class="nav-item active">
<?php echo "<a class='nav-link btn btn-outline-success p-3 ml-2' href='jefe.php?token=$digitos' ><i class='far fa-key'></i> Administrar</a>";?>
      </li>

      <li class="nav-item active">
      <?php echo "<a class='nav-link btn btn-danger py-3 ml-2' href='ip.php?token=$digitos' target='_blanck' ><i class='fal fa-wifi fa-lg'></i></a>";?>
      </li>
      <li class="nav-item">
      <?php echo "<a href='ip.php?token=$digitos' target='_blanck' class='btn btn-outline-danger text-white p-3'> Red Local</a>";?>
      </li>


    </ul>

  </div>
</nav> 
</div><!--cierra el container-->
<!--nav bar-->

<div class="container">
<div class="row justify-content-center mt-4">
    <div class="col-12 col-sm-8 col-md-5 my-5 p-4" style="border-radius: 1em; background-image: url('imagenes/fondox.png');">
<!--desde aqui el FORM-->
<form action="login.php" method="post">
            <div class="">
                <img src="imagenes/formosadibujo.png" alt="Chimore" width="75%" class="rounded mx-auto d-block">
            </div>
            <div class="input-group mb-1 p-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fal fa-user"></i></span>
                      </div>
                      <input name="usuario" type="password" class="form-control" placeholder="Ingresa tu Numero de DNI" aria-label="Nombre de Usuario" aria-describedby="basic-addon1" style="height: 3.5em;" autofocus required pattern="[0-9]{3,15}">
            </div>
<input type="hidden" name="cargo" value="4">
            <div class="input-group p-3 d-flex justify-content-between">
                      <a href="index.php" class="btn btn-warning text-white rounded-0" style="height: 3em;"><h5><i class="fal fa-arrow-to-left"></i> Regresar</h5></a>
                      <button type="submit" class="btn btn-success text-white rounded-0" style="height: 3em;"><h5><i class="fal fa-sign-in"></i> Ingresar</h5></button>

            </div>
                <hr>
            <p class="text-right text-success" style="font-size: 9px; margin-bottom: -1em;"><em>VIALITO-TUBE</em></p>

</form> 
<!-- hasta aqui el formulario-->
</div>
</div>  

</div>

<div style="height: 120px;">

<footer class=" footer text-white mt-2 pt-2">
      <div class="container-fluid p-3" style="background:-webkit-gradient(linear, 80% 20%, 10% 21%, from(#FFBE00), to(#FF4E28))">
        <div class="d-flex justify-content-center py-1">
        <h5 class="lead"><i class="far fa-chess-knight fa-lg"></i> VIALITO-TUBE  <font class="text-dark"><b><i class="fal fa-copyright"></i> 2020</b></font></h5>

        </div>
        <!--<div class="d-flex justify-content-center">
          <p><a href="#" class="text-warning"><b>WWW.SUEVALUACION.COM</b></a></p>
        </div>-->
      </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script defer src="fonts/js/fontawesome-all.js"></script>

</body>

<!-- //Body -->

</html>

<!-- //html -->