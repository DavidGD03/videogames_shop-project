<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver empleados"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from empleado";
    $result = pg_query($conn,$sql1);
?>

<section>
<br/><br/><br/><br/>
<center>
<table width="1170" border="3" bgcolor="#9BCDED">
  <tr bgcolor="#7B93FA">
    <th>C&oacute;digo</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>C&eacute;dula</th>
    <th>Contrase&ntilde;a</th>
    <th>Correo</th>
    <th>G&eacute;nero</th>
    <th>Fecha de nacimiento</th>
    <th>Cargo</th>
    <th>Direcci&oacute;n</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Tel&eacute;fono</th>
	<th>Acciones</th>
  </tr>
  <?PHP     
				while($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$cedula=$row1["1"];
											$nombre=$row1["2"];
											$apellido=$row1["3"];
											$correo=$row1["4"];
											$contrasena=$row1["5"];
											$telefono=$row1["6"];
											$genero=$row1["7"];
											$fchnacimiento=$row1["8"];
											$direccion=$row1["9"];
											$ciudad=$row1["10"];
											$depto=$row1["11"];
											$cargo=$row1["12"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $apellido;
											echo "</td>";
											echo "<td >";
											echo $cedula;
											echo "</td>";
											echo "<td >";
											echo $contrasena;
											echo "</td>";
											echo "<td >";
											echo $correo;
											echo "</td>";
											echo "<td >";
											echo $genero;
											echo "</td>";
											echo "<td >";
											echo $fchnacimiento;
											echo "</td>";
											echo "<td >";
											echo $cargo;
											echo "</td>";
											echo "<td >";
											echo $direccion;
											echo "</td>";
											echo "<td >";
											echo $depto;
											echo "</td>";
											echo "<td >";
											echo $ciudad;
											echo "</td>";
											echo "<td >";
											echo $telefono;
											echo "</td>";
											echo "<td align='center'><a href='../modificaciones/editarempleado.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/editar.png' alt='Editar' width='32' height='32' style='vertical-align: middle'>
</button></a><a href='../eliminaciones/eliminarempleado.php?id=",$codigo,"'><button type='button'>
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