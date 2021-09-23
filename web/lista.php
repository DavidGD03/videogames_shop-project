<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Lista de deseos - VG"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_SESSION['id'];
	 $sql1="select * from listadeseos where id_usuario='".$id."'";
    $result = pg_query($conn,$sql1);
if (isset($_GET["eliminado"])=="si") {
	$var = "Producto eliminado de la lista";
	echo "<script> alert('".$var."'); </script>";
}
if ( !isset ( $_SESSION['nickname'] ) ) {
	header("Location: login.php?errorlog=si");
}
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
    <th><font size='6'>ATENCIÓN: <br/>LA LISTA DE DESEOS ESTÁ VACÍA</font></th>
  </tr>";
	}
	else
	{
		 echo "<table width='1000' border='3' bgcolor='#9BCDED'><tr bgcolor='#7B93FA'>
    <th>Nombre</th>
	<th>Descuento</th>
    <th>Total</th>
	<th>Opciones</th>
  </tr>";
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
											
											echo "<td align='center'><a href='eliminarlista.php?id=",$juego,"'><button type='button'>
  <img src='icon/eliminar.png' alt='Eliminar' width='32' height='32' style='vertical-align: middle'>
</button></a>";
												echo "</td>";
											echo "</tr>";	 
							}  } 
 
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