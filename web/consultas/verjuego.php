<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver juegos"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from juego";
    $result = pg_query($conn,$sql1);
?>

<section>
<br/><br/>
<center>
<table width="1700" border="3" bgcolor="#9BCDED">
  <tr bgcolor="#7B93FA">
    <th>C&oacute;digo</th>
    <th>Nombre</th>
    <th>Descripci&oacute;n</th>
    <th>Desarrollador</th>
    <th>Imagen</th>
	<th>Imagen 2</th>  
    <th>Fecha de publicaci&oacute;n</th>
    <th>Requerimientos</th>
    <th>Precio</th>
    <th>Descuento</th>
    <th>Clasificaci&oacute;n</th>
	<th>Acciones</th>
  </tr>
  <?PHP     
				while($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$precio=$row1["1"];
											$descuento=$row1["2"];
											$imagen=$row1["3"];
											$nombre=$row1["4"];
											$dev=$row1["5"];
											$desc=$row1["6"];
											$clasi=$row1["7"];
											$fecha=$row1["8"];
											$req=$row1["9"];
											$imagen2=$row1["10"];
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td width='600'>";
											echo $desc;
											echo "</td>";
											echo "<td >";
											echo $dev;
											echo "</td>";
											echo "<td >";
											echo $imagen;
											echo "</td>";
											echo "<td >";
											echo $imagen2;
											echo "</td>";
											echo "<td >";
											echo $fecha;
											echo "</td>";
											echo "<td >";
											echo $req;
											echo "</td>";
											echo "<td >";
											echo $precio;
											echo "</td>";
											echo "<td >";
											echo $descuento;
											echo "</td>";
											echo "<td >";
											echo $clasi;
											echo "</td>";
											echo "<td align='center'><a href='../modificaciones/editarjuego.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/editar.png' alt='Editar' width='32' height='32' style='vertical-align: middle'>
</button></a><a href='../eliminaciones/eliminarjuego.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/eliminar.png' alt='Eliminar' width='32' height='32' style='vertical-align: middle'>
</button></a>";
												echo "</td>";
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conn); 
?> 
</table>

</center>
<br/><br/><br/>
</section>
<?php
include('../admin/footer.php');
?>
</body>
</html>