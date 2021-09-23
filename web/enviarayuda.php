<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Reclamo enviado"; 
	 encabezado($titulo);
	 include("menu.php");
?>
<section>
<br/> <br/>
<form action="ayuda.php">
<center>
<table width="1241" height="224" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							$codigo = $_POST["codigo"];
							$titulo = $_POST["titulo"];
							$desc = $_POST["desc"];
							$motivo = $_POST["motivo"];
							$fecha = $_POST["fecha"];
							$plataf=$_POST["plataf"];
							$horas=$_POST["horas"];	       
							$juego=$_POST["juego"];                           
							 $usuario=$_POST["usuario"];                         													
									

							$sql3="insert into reclamo (idrec,id_juego,id_usuario,descripcion,estado,titulo,fecha,motivo,horas,plataforma) values ('$codigo','$juego', '$usuario','$desc','".'Pendiente'."','$titulo','$fecha','$motivo','$horas','$plataf')";

							$result = pg_query($conn, $sql3);	


				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{					
									echo"EL RECLAMO SE ENVIÓ SATISFACTORIAMENTE"; 
									echo "</br>GRACIAS POR CONTACTARNOS<br/>"; 
								}
						?>

</th>
</tr>
  <tr>
    <td height="61" colspan="4" align="center"><button>
  <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Volver
</button></td>
  </tr>
</table></center>
</form>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>