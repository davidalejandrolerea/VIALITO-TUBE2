<?php 
  include("../sesion.class.php");
$sesion=new sesion();
$cargo=$sesion->get("cargo");
$usuario=$sesion->get("usuario");
if ($cargo=='3') { ?>
<?php include("top-estudiantes.php");?>


        <main role="main">
<section class="jumbotron text-left">
        <div class="container">

<!-- Grid row -->
    <div class="row text-center">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6">
            <div class="card card-body">
              <!--<form action="foto.php" method="post" enctype="multipart/form-data">-->
                <div class="avatar mx-auto" style="max-width: 120px;">
<?php
$anio='2020';
$consu="SELECT * FROM dat_admin WHERE ci='$usuario' AND gestion='$anio' ";
if ($fes=$link->query($consu)) {
while ($rp=$fes->fetch_array()) {
  $fotoG =$rp['foto'];

if ($fotoG=='') {

 echo "<img src='fotos/foto.png' class='rounded-circle img-fluid'>";
}else{

 echo "<img src='fotos/".$fotoG."' class='rounded-circle img-fluid'>";
}

}
}

?>
                    
                </div>
                <h6 class="">
                    <strong><?php echo $aps." ".$ams." ".$noms;?> </strong>
                </h6>
                <p class="grey-text"><?php echo $curso." ".$paralelo." ".$nivel;?></p>
                <div class="d-flex justify-content-between">
                  <a href="foto.php" class="btn btn-light"> <i class="far fa-edit fa-2x"></i></a>
                </div>
              <!--</form>-->
            </div>
        </div>
        <!-- Grid column -->
        <div class="col-lg-5 col-md-7">
            <!--<a href="trabajos/autoevaluacion.docx" class="btn btn-success btn-lg"> Descargar <span class="badge badge-danger">AUTOEVALUACION</span></a> <br>-->
            <div class="alert bg-danger alert-dismissible fade show text-white" role="alert">
              <font class="lead"><strong><i class="fas fa-exclamation"></i> ATENTO <i class="fas fa-exclamation"></i></strong></font><p class="lead"> Revisa en la sección de <b>VIDEOS</b> y participa, cada participación tuya cuenta.</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
        <!-- Grid column -->
</div>

        </div>
</section>
      <div class="album py-3 bg-light">
        <div class="container">

          <div class="row">
<?php
include("../conexion.php");

$consulta="SELECT * FROM dat_admin WHERE ci='$usuario' ";
$resultado=$link->query($consulta);
         while ($row=$resultado->fetch_assoc()) {
             $id=$row['id'];
             $ap=$row['ap'];
             $am=$row['am'];
             $nom=$row['nom'];
             $ci=$row['ci'];
             $colegio=$row['colegio'];
             $nivel=$row['nivel'];
             $curso=$row['curso'];
             $paralelo=$row['paralelo'];
             $gestion=$row['gestion'];

//$consultas="SELECT * FROM examen WHERE colegio='$colegio' AND nivel='$nivel' AND curso='$curso' AND paralelo='$paralelo' AND estado='Publicado' AND gestion='2018' ";
$consultas="SELECT * FROM examen WHERE colegio='$colegio' AND nivel='$nivel' AND curso='$curso' AND paralelo='$paralelo' AND estado='Publicado' AND gestion='$gestion' ";
if ($resultados=$link->query($consultas)) {
         while ($row=$resultados->fetch_array()) {
             $id_examen=$row['id'];
             $categoria=$row['categoria'];
             $titulo=$row['titulo'];
             $fecha_final=$row['fecha_final'];
             $fechas = date("d/m/Y", strtotime($fecha_final));

 $fecha_hoy = date("Y-m-d");

 if (strcmp($fecha_hoy, $fecha_final)>0){ 

//echo " <p><a href='final.php?id_examen=$id_examen'><button type='button' class='btn btn-danger'> Finalizó ".$titulo."</button></a></p>";
echo"
<div class='col-md-4'>
              <div class='card mb-4 box-shadow'>
                <img class='card-img-top' src='imagenes/evaluaciones.png' alt='Card image cap'>
                <div class='card-body'>
                  <p class='card-text'><strong>EVALUACIÓN : </strong><font style='color:green;'>".utf8_decode($categoria)."</font><br><strong>TÍTULO: </strong><font style='color:green;'>".utf8_decode($titulo)."</font><br> <strong>Estado:</strong> <font class='text-white bg-danger p-1'>Finalizado</font> <small> en fecha: ".$fechas."</small></p>
                  <div class='d-flex justify-content-between align-items-center'>
                  <hr>
                    <div class='btn-group'>

                      <a href='final.php?id_examen=$id_examen'><button type='button' class='btn btn-warning'>Ver Puntaje >>> </button></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>";
	
 }else{
	
//echo "<p><a href='proceso.php?id=$id_examen&ci=$ci'><button type='button' class='btn btn-primary'> ".$titulo."</button></a></p> ";
 echo"
<div class='col-md-4'>
              <div class='card mb-4 box-shadow'>
                <img class='card-img-top' src='imagenes/evaluaciones.png' alt='Card image cap'>
                <div class='card-body'>
                  <p class='card-text'><strong>EVALUACIÓN : </strong><font style='color:green;'>".utf8_decode($categoria)."</font><br><strong>TÍTULO: </strong><font style='color:green;'>".utf8_decode($titulo)."</font><br> <strong>Estado:</strong> <font class='text-white bg-primary p-1'>Disponible</font> <small>Hasta: ".$fechas."</small></p>
                  <div class='d-flex justify-content-between align-items-center'>
                  <hr>
                    <div class='btn-group'>

                      <a href='index.php?id=$id_examen&ci=$ci'><button type='button' class='btn btn-success'>Comenzar >>> </button></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>";
 } 
         

             
 } } 

 } 
?>      



          </div>
        </div>
      </div>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->


	<!--=== End Sticky Footer ===-->
<?php include("footer-examen.php");?>
<?php  }else{
  echo "No eres Administrador y No tienes Permiso para ver esta pagina ";
  echo "<a href ='../index.php' > REGRESAR </a>";
}?>