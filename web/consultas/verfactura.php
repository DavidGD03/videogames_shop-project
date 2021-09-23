<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver facturas"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from factura";
    $result = pg_query($conn,$sql1);
?>

<section>
<br/><br/>
<center>
<table width="1170" border="3" bgcolor="#9BCDED">
  <tr bgcolor="#7B93FA">
    <th>C&oacute;digo</th>
    <th>Estado</th>
    <th>Fecha</th>
    <th>Descuento</th>
    <th>IVA</th>
    <th>Subtotal</th>
    <th>Total</th>
    <th>Usuario</th>
    <th>Direcci&oacute;n</th>
    <th>Ciudad</th>
    <th>Departamento</th>
	<th>Acciones</th>
  </tr>
  <?PHP     
				while($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$totaldes=$row1["1"];
											$iva=$row1["2"];
											$total=$row1["3"];
											$fecha=$row1["4"];
											$usuario=$row1["5"];
											$estado=$row1["6"];
											$subtotal=$row1["7"];
											$direccion=$row1["8"];
											$depto=$row1["9"];
											$ciudad=$row1["10"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $estado;
											echo "</td>";
											echo "<td >";
											echo $fecha;
											echo "</td>";
											echo "<td >";
											echo $totaldes;
											echo "</td>";
											echo "<td >";
											echo $iva;
											echo "</td>";
											echo "<td >";
											echo $subtotal;
											echo "</td>";
											echo "<td >";
											echo $total;
											echo "</td>";
											echo "<td >";
											echo $usuario;
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
											echo "<td align='center'><a href='../modificaciones/editarfactura.php?id=",$codigo,"'><button type='button'>
  <img src='../icon/editar.png' alt='Editar' width='32' height='32' style='vertical-align: middle'>
</button></a><a href='../eliminaciones/eliminarfactura.php?id=",$codigo,"'><button type='button'>
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