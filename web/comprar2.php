<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Compra"; 
	 encabezado($titulo);
	 include("menu.php");
extract($_POST);
$fechaActual= date('d-m-Y');
$juegos=$_SESSION['carrito'];
?>
<section>
<br/> <br/>
<form action="index.php">
<center>
<table width="1241" height="224" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
									

							$sql3="insert into factura (idfac,  iva, total, fecha, id_usuario, estadopago,subtotal, direccion, depto,ciudada) values ('$codigo', '$iva','$total','$fechaActual','$usuario','".'Pagado'."','$total','$direc','$depto','$ciudad')";
	$result = pg_query($conn, $sql3);
	foreach($juegos as $juego)
	{
		$sql4="insert into factura_juego (id_factura,id_juego) values ('$codigo','$juego') ";
		$result2=pg_query($conn, $sql4);
	}
	$sql = "delete from carrito where usuario='".$usuario."'";
$result = pg_query($conn, $sql);
							
				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{					
									echo"GRACIAS POR COMPRAR EN VIRTUAL GAME"; 
									echo "</br>"; 
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