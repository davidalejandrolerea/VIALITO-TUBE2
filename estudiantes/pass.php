<?php 
  include("../sesion.class.php");
$sesion=new sesion();
$cargo=$sesion->get("cargo");
$usuario=$sesion->get("usuario");
if ($cargo=='3') { ?>
<?php include("top-examen.php");?>

<div class="container-fluid">
<!--nav bar-->






    

  <!--<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">TRABAJOS</div>
  <div class="card-body">
    <h5 class="card-title">Materia:</h5>
    <h5 class="card-title">Título:</h5>
    <p class="card-text">Estado:</p>
  </div>
</div>-->

 <?php 
 include("../conexion.php");





  /*echo "<form action='trabajos.php' method='get'>";
  echo "<tr>";
  echo "<td>".$numero."
  <input type='hidden' name='id_trabajos' value='".$id."'> 
  <input type='hidden' name='ci' value='".$usuario."'> 
  </td>";
  echo "<td>".$categoria."</td>";
  echo "<td>".utf8_decode($titulo)."</td>";
  echo "<td>".$fecha."</td>";
  echo "<td><button type='submit' class='btn btn-success'>Ingresar</button></td>";
  echo "</tr>";
  echo "</form>";
  $numero++;*/


 ?> 
<ul>
<center><h1>UTLIMOS VIDEOS AGREGADOS</h1></center>
</ul>

<?php 

$API_KEY = "AIzaSyB7ZMbfhlUQo0wDwGJUP_1_XF5KoRuC_hw";
$CHANNEL_ID = "UCpmRfwZ0xWEsJeonic0dkvw";
$MAX_RESULTS = 5;

$videoLista = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$CHANNEL_ID.'&maxResults='.$MAX_RESULTS.'&key='.$API_KEY.''));

foreach ($videoLista->items as $item) {
  if(isset($item->id->videoId)) {
   echo '<div class="youtube-video">
    <iframe width="400" height="300"
    src="https://www.youtube.com/embed/'.$item->id->videoId.'"
   frameborder="0" allowfullscreen></iframe>
   <h2>'.$item->snippet->title.'</h2>



       </div>';



  }
}















 ?>




        </script>
         
        <div class = "col-sm-6 col-md-3">
      
        <div class = "thumbnail" >
        
        <a href = "#" class = "youtube-video-player youtube" data-video-id='<script>urlVideo</script>'> 
          <p class="play" ></p>
          <img class='img-responsive' src = "http://img.youtube.com/vi/<script>urlVideo</script>/0.jpg" alt='<script>tituloVideo</script>;?>'>
          
        </a> 
        </div>
        
        <div class = "caption">
          
         <h4 class='text-center text-muted'><script>console.log('tituloVideo')</script></h4>
     
        </div>
       </div>


 
 
  

</div>
</div><!--cierra el div del container-->

	<!--=== End Sticky Footer ===-->
<?php include("footer-examen.php");?>
<?php  }else{
  echo "No eres Administrador y No tienes Permiso para ver esta pagina ";
  echo "<a href ='../index.php' > REGRESAR </a>";
}?>