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
<form action="crearfactura.php">
<center>
<table width="1241" height="224" border="3" bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							$codigo = $_POST["codigo"];
							$estado = $_POST["estado"];
							$fecha = $_POST["fecha"];
							$iva = $_POST["iva"];
							$descuento = $_POST["descu"];
							$subtotal= $_POST["subtotal"];
							$total=$_POST["total"];	       
							$usuario=$_POST["usuario"];                           
							 $direccion=$_POST["direc"];
							$departamento=$_POST["depto"];
							$ciudad=$_POST["ciudad"];                                 													
							
									

							$sql3="insert into factura (idfac, totaldes, iva, total, fecha, id_usuario, estadopago,subtotal, direccion, depto,ciudada) values ('$codigo','$descuento', '$iva','$total','$fecha','$usuario','$estado','$subtotal','$direccion','$departamento','$ciudad')";

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