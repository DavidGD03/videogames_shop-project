<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Admin VG"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
?>
<section>
<br/> <br/>
<form action="crearjuego.php">
<center>
<table width="1241" height="224" border="3"  bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							$codigo = $_POST["codigo"];
							$nombre = $_POST["nombre"];
							$desc = $_POST["desc"];
							$dev = $_POST["dev"];
							$imagen = $_FILES['imagen']['name'];
							$imagen2 = $_FILES['imagen2']['name'];
							$fecha= $_POST["fecha"];
							$req=$_POST["req"];	       
							$precio=$_POST["precio"];                           
							 $descu=$_POST["descu"];
							$clasi=$_POST["clasi"];                           													
							
								
							$sql3="insert into juego (idjuego,precio,descuento,imagen,nombre,id_desarrollador,descripcion,id_clasificacion,fecha,req,imagen2) values ('$codigo','$precio', '$descu','$imagen','$nombre','$dev','$desc','$clasi','$fecha','$req','$imagen2')";

							$result = pg_query($conn, $sql3);	
	


				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{	
   //Si el archivo contiene algo y es diferente de vacio
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];
		$tipo2 = $_FILES['imagen2']['type'];
      $tamano2 = $_FILES['imagen2']['size'];
      $temp2 = $_FILES['imagen2']['tmp_name'];						
	$carpeta=$_SERVER['DOCUMENT_ROOT'] . '/final/imagen/';
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
        echo '<br/><b>Error. La extensión o el tamaño de la imagen 1 no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 2000 kb como máximo.</b><br/>';
     }
     else  if (!((strpos($tipo2, "gif") || strpos($tipo2, "jpeg") || strpos($tipo2, "jpg") || strpos($tipo2, "png")) && ($tamano2 < 20000000))) {
        echo '<br/><b>Error. La extensión o el tamaño de la imagen 2 no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 2000 kb como máximo.</b><br/>';
     }
		   else
		   {
			   
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, $carpeta.$imagen) && move_uploaded_file($temp2, $carpeta.$imagen2)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
			echo"<br/>";
			echo"LA SUBIDA DE LAS IMÁGENES FUE EXITOSA<br/>";
            echo"LOS  DATOS SE  INSERTARON  CORRECTAMENTE"; 
									echo "</br>"; 
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
     }
								}
						?>

</th>
</tr>
  <tr>
    <td height="61" colspan="4" align="center"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Volver
</button></td>
  </tr>
</table></center>
</form>
<br/><br/><br/>
</section>
<?php
include('../admin/footer.php');
?>
</body>
</html>