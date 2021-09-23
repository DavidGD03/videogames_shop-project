<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Carrito - VG"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_SESSION['id'];
	 $sql1="select * from carrito where usuario='".$id."'";
    $result = pg_query($conn,$sql1);
if (isset($_GET["eliminado"])=="si") {
	$var = "Producto eliminado del carrito";
	echo "<script> alert('".$var."'); </script>";
}
if ( !isset ( $_SESSION['nickname'] ) ) {
	header("Location: login.php?errorlog=si");
}
$_SESSION['carrito']=array();
?>

<section>
<br/><br/><br/><br/>
<center>
  <?PHP   
	$numrows = pg_numrows($result);
	if ($numrows==0)
	{
		 echo "<table width='800' height='200' border='3' bgcolor='#9BCDED'>
		 <tr>
    <th><font size='6'>ATENCIÓN: <br/>EL CARRITO ESTÁ VACÍO</font></th>
  </tr>";
	}
	else
	{
		 echo "<form method='post' action='comprar.php'>
		 <table width='600' border='3' bgcolor='#9BCDED'><tr bgcolor='#7B93FA'>
    <th>Nombre</th>
	<th>Descuento</th>
    <th>Total</th>
	<th>Opciones</th>
  </tr>";
		$total=0;
				while($row1=pg_fetch_array($result)) 
							{ 
	
											$codigo=$row1["0"];
											$juego=$row1["1"];
										$sql2="select * from juego where idjuego='".$juego."'";
											 $result2 = pg_query($conn,$sql2);
											$row2=pg_fetch_array($result2);
											$nombre=$row2['4'];
											$descu=$row2['2'];
											$precio=$row2['1'];
											array_push ( $_SESSION['carrito'] , $juego );
											echo "<tr>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $descu;
											echo "</td>";
											echo "<td>";
											echo $precio;
											echo "</td>";
											
											echo "<td align='center'><a href='eliminarcarrito.php?id=",$juego,"'><button type='button'>
  <img src='icon/eliminar.png' alt='Eliminar' width='32' height='32' style='vertical-align: middle'>
</button></a>";
												echo "</td>";
											echo "</tr>";	 
					$total=$precio+$total;
							}  
		echo"<tr><td colspan='4' align='center'><b>El total de esta compra es: $".$total."</b></td></tr>";
		echo "<input type='hidden' name='total' value='".$total."'></input>";
		echo "<tr><td colspan='4' align='center'><br/>";
		echo "<button><img src='comprar.png' alt='Enviar' width='32' height='32' style='vertical-align: middle'>
  Comprar todo
</button><br/></td></tr></form>";
	} 
 
  pg_close($conn); 
?> 
</table>

</center>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>