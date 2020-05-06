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

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
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
  <body style="background-image: url(imagenes/fondo.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #66999;">
 <!--container -->   
<div class="container-fluid" style="background-color: rgba(20, 22, 19, 0.6);">
 <nav class="navbar navbar-expand-lg navbar-dark container p-4" style="background-color: rgba(20, 22, 19, 0.2);">
  <a class="navbar-brand" href="#"><i class="fal fa-edit fa-2x"></i> SISEV <font class='text-warning'>Plataforma </font>v3.0</a>
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
        <a class="nav-link btn btn-light text-dark p-3" href="../index.php" ><i class="far fa-home"></i> Senda III</a>
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

     
      <li class="nav-item">
        <?php echo "<a href='ip.php?token=$digitos' target='_blanck' class='btn btn-danger text-white p-3 ml-2'><i class='fal fa-wifi fa-lg'></i> Red Local</a>";?>
      </li>


    </ul>

  </div>
</nav> 
</div><!--cierra el container-->
<div class="container bg-light p-3">
	<div class="row">
		<div class="col-12">

			<?php
			include("conexion.php");

			$id=$_POST['id'];
			$cons="SELECT * FROM foros WHERE id='$id' ";
			$res=$link->query($cons);
			while ($rod=$res->fetch_array()) {
				$autor=$rod['autor'];
				$categoria=$rod['categoria'];
				$titulo=$rod['titulo'];
				$consigna=$rod['consigna'];
	}
			?>
			<h1 class="display-4"> Foro v3.0</h1>
			<hr>
<div class="d-flex justify-content-between">

		<div>

		<b>Título: </b><?php echo $titulo;?> 
		</div>
			 
		<div>
		<b>Materia: </b><?php echo $categoria;?>
		</div>
</div>
			
			<div class="d-flex justify-content-center p-3 mt-2" style="border-radius: 0.2em;">
				<h4 class="display-5"><?php echo $consigna;?></h4>

			</div>
			<hr>
			


<!--cuadro de las opiniones-->

<?php 

$participantes="SELECT * FROM foros_participacion WHERE id_foros='$id' ";
$result=$link->query($participantes);
         while ($roj=$result->fetch_array()) {
$id_fp=$roj['id_fp'];
$id_autor=$roj['id_autor'];
$id_foros=$roj['id_foros'];
$comentario=$roj['comentario'];
$fecha=$roj['fecha'];
$estrellas=$roj['estrellas'];
//$puntajes=$roj['puntajes'];

echo "<div class=''>";
	echo "<div class='row'>";
		//<!--Grid column-->
		//<!--Grid column-->
        echo "<div class='col-md-2 mb-2'>";//col-3
				if ($id_fp>0) {

								$consultx="SELECT * FROM dat_admin WHERE ci='$id_autor' ";
								$resultadx=$link->query($consultx);
								         while ($rowx=$resultadx->fetch_assoc()) {
								             $id_admin=$rowx['id'];
								             $apx=$rowx['ap'];
								             $amx=$rowx['am'];
								             $nomx=$rowx['nom'];
								             $nivelx=$rowx['nivel'];
								             $cursox=$rowx['curso'];
								             $paralelox=$rowx['paralelo'];
								             $fotox=$rowx['foto'];
								             $cargox=$rowx['cargo'];
								 }
								}
            echo "<div class='testimonial text-center'>";//IMAGEN*********************************
                //<!--Avatar-->
                echo "<div class='avatar mx-auto my-1'>";

                	echo "<img src='estudiantes/fotos/".$fotox."' width='50%' class='rounded-circle img-fluid'>";

                echo "</div>";
echo "<div class='float-center mt-4'>";
if ($cargox=='3') {

echo "<small class='mt-3'>Estudiante</small>";
echo "<hr>";
echo "<p class='text-warning'>";
if ($estrellas=='0') {
echo "<i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i>";
}elseif ($estrellas=='1') {
echo "<i class='fas fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i>";
}elseif ($estrellas=='2') {
echo "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i>";
}elseif ($estrellas=='3') {
echo "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i>";
}elseif ($estrellas=='4') {
echo "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fal fa-star'></i>";
}elseif ($estrellas=='5') {
echo "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>";
}else{
echo "<i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i><i class='fal fa-star'></i>";
}

echo "</p>";
}elseif ($cargox=='4') {

echo "<small class='mt-2'>Administrador</small>";
echo "<hr>";
echo "<p class='text-warning'>";

echo "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>";


echo "</p>";

}
//<i class="fal fa-star"></i>
echo "</div>";
                
               
            echo "</div>";//IMAGEN***********************************************


        echo "</div>";// fin COL 3
        echo "<div class='col-md-10'>";

        setlocale(LC_ALL,"es_ES");
		
        	echo "<div class='d-flex justify-content-end'>".strftime("%d de %B %Y a Hrs. %H:%M %P",strtotime($fecha))."</div>";
			echo "<div class='my-2'><font class='lead' style='color:#F31B70;'>".$nomx." ".$apx[0].".</font> dice: </div><br>";
			echo "<div class=''><font class='lead'>".$comentario."</font></div>";
			//echo "<div class='d-flex justify-content-end'><a href='#' class='btn btn-outline-warning'><i class='far fa-thumbs-up'></i></a></div>";

        echo "</div>";       

    //<!--Grid row-->
	echo "</div>";//<!--row-->
echo "</div>";
echo "<hr style='border:none;
  border-top:1px dotted #979695;
  color:#fff;
  background-color:#fff;
  height:1px;
  width:100%;'>";
/*
				if ($id_fp>0) {

				$consultx="SELECT * FROM dat_admin WHERE ci='$id_autor' ";
				$resultadx=$link->query($consultx);
				         while ($rowx=$resultadx->fetch_assoc()) {
				             $id_admin=$row['id'];
				             $apx=$rowx['ap'];
				             $amx=$rowx['am'];
				             $nomx=$rowx['nom'];
				             $nivelx=$rowx['nivel'];
				             $cursox=$rowx['curso'];
				             $paralelox=$rowx['paralelo'];
				             $fotox=$rowx['foto'];
				 }

				}

				if ($foto=='') {
					echo "<img src='fotos/foto.png' class='rounded-circle img-fluid'>";
				}else{
					echo "<img src='fotos/".$fotox."' class='rounded-circle img-fluid'>";
				}*/

}
//echo "<hr>";
?>

<!---todo esto es el grid para el FORO-->
</div><!--CIERRA EL DIV DE COL-12 --> 

<!--cuadro de envio-->
<div class="row">
	<div class="col-12 pl-4">
		<a href="foros.php" class="btn btn-warning"><h4><i class="fal fa-arrow-to-left"></i> Regresar</h4></a>
	</div>
</div>
<!--<div class="row">

		<div class="col-md-3"> 
			<p class="lead lead pl-5">ESCRIBE TU COMENTARIO</p>
		</div>
		<div class="col-md-9 p-3">
			<form action="foros_okx.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="ci" value="<?php echo $usuario;?>">
						<textarea name="comentario" class="form-control" rows="5"></textarea>
						<hr>
						<div class="d-flex justify-content-end">
							<button type="submit" class="btn btn-danger" style="height: 70px;">COMENTAR</button>
						</div>
			</form>	
		</div> 

</div>-->


</div><!--ROW-->
</div><!--container-->
<div style="height: 120px;">

<footer class=" footer text-white mt-2 pt-2">
      <div class="container-fluid p-3" style="background:-webkit-gradient(linear, 80% 20%, 10% 21%, from(#FFBE00), to(#FF4E28))">
        <div class="d-flex justify-content-center py-1">
        <h5 class="lead">Designed by: <i class="far fa-chess-knight fa-lg"></i> Wilson Orellana  <font class="text-dark"><b><i class="fal fa-copyright"></i> 2018</b></font></h5>

        </div>
        <!--<div class="d-flex justify-content-center">
          <p><a href="#" class="text-warning"><b>WWW.SUEVALUACION.COM</b></a></p>
        </div>-->
      </div>
    </footer>

<!--<img src="imagenes/fondo.jpg" class="img-fluid" alt="Responsive image">-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
  </body>
</html>