<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Editar juego"; 
	 encabezado($titulo);
$id=$_GET['id'];
	 include("../admin/menu.php");
	 $sql1="select * from desarrollador";
	 $sql2="select * from clasificacion";
$sql3="select * from juego where idjuego='$id' LIMIT 1";
    $result = pg_query($conn,$sql1);
	$result2 = pg_query($conn,$sql2);
$result3 = pg_query($conn,$sql3);
	$row2=pg_fetch_array($result3);
?>
<section>
<br/><br/>
<form name="juego" method="post" action="../admin/modificarjuego.php" enctype="multipart/form-data" onsubmit="return validarJuego()">
<center>
<table width="1700" border="4" bgcolor="#9BCDED">
<tr>
<th height="57" colspan="3">
<font color="#663333" size="6"> Editar juego</font>
</th>
</tr>
  <tr>
    <td width="321" align="center"><input type="hidden" name="id" id="codigo" value="<?php echo $row2['0']; ?>"/>
<p> <br/><label><strong>Nombre:</strong>
  <input type="text" name="nombre" id="nombre" placeholder="Digite el nombre" value="<?php echo $row2['4']; ?>"></label></p>
  <p> <br/><label><strong>Descripci&oacute;n:</strong>
    <textarea name="desc" id="descripcion" cols="26" rows="3" placeholder="Digite la descripci&oacute;n"><?php echo $row2['6']; ?></textarea></label> </p><br/></td>
    <td width="379" align="center">
    <p><br/> <label><strong>Desarrollador:</strong>
  <select name="dev">
  <?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select></p>
<p> <br/><strong>Imagen:</strong>
  <input type="file" name="imagen" id="imagen" value="<?php echo $row2['3']; ?>"></p>
		<p> <br/><strong>Imagen 2:</strong>
  <input type="file" name="imagen2" id="imagen2"></p>
<p> <br/><label><strong>Fecha de publicaci&oacute;n:</strong>
  <input type="date" name="fecha" id="fecha" value="<?php echo $row2['8']; ?>"></label></p><br/></td>
    <td width="331" align="center"><p> <label><strong>Requerimientos:</strong>
  <textarea name="req" id="req" cols="26" rows="3" placeholder="Digite los requerimientos"><?php echo $row2['9']; ?></textarea></label></p>
<p> <br/><label><strong>Precio:</strong>
  <input type="number" name="precio" id="precio" placeholder="Digite el precio" onkeypress="return numero(event)" value="<?php echo $row2['1']; ?>"></label></p>
  <p><br/><label> <strong>Descuento:</strong>
  <input type="number" name="descu" id="descuento" placeholder="Descuento en porcentaje" max=100 step=5 onkeypress="return numero(event)" value="<?php echo $row2['2']; ?>"></label></p>
<p><br/> <label><strong>Clasificaci&oacute;n:</strong>
  <select name="clasi">
  <?PHP
while($row = pg_fetch_array($result2)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select></p><br/></td>
  </tr>
  <tr>
    <th height="66" colspan="3"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Modificar
</button> 
	  <button type="button"><img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle"><a href="../consultas/verjuego.php">Volver</a></img></button>
	  </th>
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