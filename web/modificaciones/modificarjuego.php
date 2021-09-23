<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Editar juego"; 
	 encabezado($titulo);
include("../admin/menu.php");
extract($_POST);
?>
<center>
<table width="750" height="150" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?php
	$imagen = $_FILES['imagen']['name'];
	$imagen2 = $_FILES['imagen2']['name'];
$sql1="UPDATE juego SET precio='".$precio."',descuento='".$descu."',imagen='".$imagen."',nombre='".$nombre."',id_desarrollador='".$dev."',descripcion='".$desc."',id_clasificacion='".$clasi."',fecha='".$fecha."',req='".$req."',imagen2='".$imagen2."' where idjuego='".$id."'";
$result1=pg_query($conn,$sql1);

if ($result1==0)
{
	echo "<br/><br/>";
	echo "<font size='5' color='red'>LOS DATOS NO SE PUDIERON MODIFICAR CORRECTAMENTE<br/>";
	echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
}
	else {
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
            echo"<font size='5' color='green'>LOS DATOS SE MODIFICARON CORRECTAMENTE<br/>"; 
			echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
									echo "</br>"; 
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
     }
								}
header( "refresh:5;url=../consultas/verjuego.php" );
?>
	</table></center>
	<br/><br/>
</section>
	
	<?php
include('../admin/footer.php');
?>
</body>
</html>