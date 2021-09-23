<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Mis mensajes"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_SESSION['id'];
	 $sql1="select * from mensajes_usuario where usuario_recibe='".$id."'";
    $result = pg_query($conn,$sql1);
if (isset($_GET["eliminado"])=="si") {
	$var = "Mensaje eliminado correctamente";
	echo "<script> alert('".$var."'); </script>";
}
?>

<section>
<br/><br/><br/><br/>
<center>
  <?PHP   
	$numrows = pg_numrows($result);
	if ($numrows==0)
	{
		 echo "<table width='500' height='200' border='3' bgcolor='#9BCDED'>
		 <tr>
    <th><font size='6'>ATENCIÓN: <br/>NO HAY MENSAJES</font></th>
  </tr>";
	}
	else
	{
		 echo "<form method='post' action='comprar.php'>
		 <table width='1000' border='3' bgcolor='#9BCDED'><tr>
    <th>Asunto</th>
	<th>Texto</th>
    <th>Fecha</th>
	<th>Usuario que la envió</th>
	<th>Opciones</th>
  </tr>";
		$total=0;
				while($row1=pg_fetch_array($result)) 
							{ 
	
											$asunto=$row1["0"];
											$texto=$row1["1"];
											$fecha=$row1['2'];
											$usuario=$row1['3'];
					$idmensaje=$row1['5'];
									$sql2="select * from usuario where iduser='".$usuario."'";
											 $result2 = pg_query($conn,$sql2);
											$row2=pg_fetch_array($result2);
											echo "<tr>";
											echo "<td align='center'>";
											echo $asunto;
											echo "</td>";
											echo "<td align='center'>";
											echo $texto;
											echo "</td>";
											echo "<td align='center'>";
											echo $fecha;
											echo "</td>";
											echo "<td align='center'>";
											echo "<a href=perfil.php?user=".$row2['0'].">".$row2['4']."</a>";
											echo "</td>";
											echo "<td align='center'><a href='eliminarmensaje.php?id=",$idmensaje,"'><button type='button'>
  <img src='icon/eliminar.png' alt='Eliminar' width='32' height='32' style='vertical-align: middle'>
</button></a>";
												echo "</td>";
											echo "</tr>";	 
							}  
		echo "</form>";
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