<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Admin VG"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
extract($_POST);
	 $sql1="select * from cargo";
    $result = pg_query($conn,$sql1);
?>
<section>
<br/> <br/>
<form action="crearnoticia.php">
<center>
<table width="1241" height="224" border="3"  bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<?PHP                                													
$imagen = $_FILES['imagen']['name'];
							$sql3="insert into noticia (idnot,fecha,titulo,descripcion,id_empleado,imagen) values ('$codigo','$fecha','$titulo','$desc','$empleado','$imagen')";

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
	$carpeta=$_SERVER['DOCUMENT_ROOT'] . '/final/imagen/';
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
        echo '<br/><b>Error. La extensión o el tamaño de la imagen no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 2000 kb como máximo.</b><br/>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, $carpeta.$imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
			echo"<br/>";
			echo"LA SUBIDA DE LA IMAGEN FUE EXITOSA<br/>";
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