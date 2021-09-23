<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver reclamos"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from reclamo";
    $result = pg_query($conn,$sql1);
?>

<section>
<br/><br/>
<center>
<table width="1170" border="3" bgcolor="#9BCDED">
  <tr bgcolor="#7B93FA">
    <th>C&oacute;digo</th>
    <th>T&iacute;tulo</th>
    <th>Descripci&oacute;n</th>
    <th>Motivo</th>
    <th>Fecha</th>
    <th>Estado</th>
    <th>Horas jugadas</th>
    <th>Plataforma</th>
    <th>Juego</th>
    <th>Usuario</th>
	<th>Acciones</th>
  </tr>
  <?PHP     
				while($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$juego=$row1["1"];
											$usuario=$row1["2"];
											$descripcion=$row1["3"];
											$estado=$row1["4"];
											$titulo=$row1["5"];
											$fecha=$row1["6"];
											$motivo=$row1["7"];
											$horas=$row1["8"];
											$plataforma=$row1["9"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $titulo;
											echo "</td>";
											echo "<td >";
											echo $descripcion;
											echo "</td>";
											echo "<td >";
											echo $motivo;
											echo "</td>";
											echo "<td >";
											echo $fecha;
											echo "</td>";
											echo "<td >";
											echo $estado;
											echo "</td>";
											echo "<td >";
											echo $horas;
											echo "</td>";
											echo "<td >";
											echo $plataforma;
											echo "</td>";
											echo "<td >";
											echo $juego;
											echo "</td>";
											echo "<td >";
											echo $usuario;
											echo "</td>";
											echo "<td align='center'><a href='../modificaciones/editarreclamo.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/editar.png' alt='Editar' width='32' height='32' style='vertical-align: middle'>
</button></a><a href='../eliminaciones/eliminarreclamo.php?id=",$codigo,"'><button type='button'>
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