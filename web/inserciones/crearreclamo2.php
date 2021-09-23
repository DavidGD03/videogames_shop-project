<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Reclamo insertado"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
?>
<section>
<br/> <br/>
<form action="crearreclamo.php">
<center>
<table width="1241" height="224" border="3"  bgcolor="##9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							$codigo = $_POST["codigo"];
							$titulo = $_POST["titulo"];
							$desc = $_POST["desc"];
							$motivo = $_POST["motivo"];
							$fecha = $_POST["fecha"];
							$estado= $_POST["estado"];
							$plataf=$_POST["plataf"];
							$horas=$_POST["horas"];	       
							$juego=$_POST["juego"];                           
							 $usuario=$_POST["usuario"];                         													
									

							$sql3="insert into reclamo (idrec,id_juego,id_usuario,descripcion,estado,titulo,fecha,motivo,horas,plataforma) values ('$codigo','$juego', '$usuario','$desc','$estado','$titulo','$fecha','$motivo','$horas','$plataf')";

							$result = pg_query($conn, $sql3);	


				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{					
									echo"<br/><br/><font size='12'>LOS  DATOS SE  INSERTARON  CORRECTAMENTE"; 
									echo "</font></br><br/>";  
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