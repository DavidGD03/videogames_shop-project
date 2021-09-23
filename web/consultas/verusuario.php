<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver usuarios"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from usuario";
    $result = pg_query($conn,$sql1);
?>

<section>
<br/><br/>
<center>
<table width="1170" border="3" bgcolor="#9BCDED">
  <tr bgcolor="#7B93FA">
    <th>C&oacute;digo</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Nickname</th>
    <th>Contrase&ntilde;a</th>
    <th>Correo</th>
    <th>G&eacute;nero</th>
    <th>Fecha de nacimiento</th>
    <th>Telefono</th>
    <th>Pa&iacute;s</th>
    <th>Dinero</th>
    <th>Puntos</th>
    <th>Nivel</th>
	<th>Acciones</th>
  </tr>
  <?PHP     
				while($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$nombre=$row1["1"];
											$apellido=$row1["2"];
											$dinero=$row1["3"];
											$nickname=$row1["4"];
											$correo=$row1["5"];
											$contrasena=$row1["6"];
											$genero=$row1["7"];
											$fchnacimiento=$row1["8"];
											$puntos=$row1["9"];
											$pais=$row1["10"];
											$nivel=$row1["11"];
											$telefono=$row1["12"];
											
											
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
											echo $nickname;
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
											echo $telefono;
											echo "</td>";
											echo "<td >";
											echo $pais;
											echo "</td>";
											echo "<td >";
											echo $dinero;
											echo "</td>";
											echo "<td >";
											echo $puntos;
											echo "</td>";
											echo "<td >";
											echo $nivel;
											echo "</td>";
											echo "<td align='center'><a href='../modificaciones/editarusuario.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/editar.png' alt='Editar' width='32' height='32' style='vertical-align: middle'>
</button></a><a href='../eliminaciones/eliminarusuario.php?id=",$codigo,"'><button type='button'>
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