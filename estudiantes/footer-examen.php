
<div style="height: 120px;">
  
</div>
    <footer class=" footer text-white mt-4 pt-4">
      <div class="container-fluid bg-dark p-3 ">
        <p class="float-right">
          <a href="#"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
        </p>
        <div class="d-flex justify-content-center py-3">
        <p>VIALITO&copy; 2019</p>
        </div>
      </div>
    </footer>


    <!-- Placed at the end of the document so the pages load faster -->
 <script src="../../js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="./../js/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" crossorigin="anonymous"></script>


    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>

    <script src="holder.min.js"></script>
</body>
<?php
include("../conexion.php");
if ($id_examen=NULL) {
    
    echo "NO TIENES NINGUNA EVALUACION PENDIENTE";
}else{ 
$relog="SELECT tiempo FROM examen WHERE id='$id_examen' ";
if ($res=$link->query($relog)) {
    while ($rw=$res->fetch_assoc()) {
        $tiempo=$rw['tiempo'];
    }
}
}
?>
<script>
    
var salida = document.getElementById("tiempo"),
    minutos = <?php echo $interval->format("%I");?>,
    segundos = <?php echo $interval->format("%S");?>,
    intervalo = setInterval(function(){
        if (--segundos < 0){
            segundos = 59;
            minutos--;
        }
 
        salida.innerHTML = "0"+ minutos + ":" + (segundos < 10 ? "0" + segundos : segundos);
      
        if (!minutos && !segundos){
            clearInterval(intervalo);
            document.getElementById("test").submit();
        }
    }, 1000);
</script>




</html>