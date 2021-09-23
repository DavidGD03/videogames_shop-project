<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Ver empleados"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	$id=$_GET['id'];
	 $sql1="select * from cargo";
	$sql2="select * from empleado where idem='$id' LIMIT 1";
    $result = pg_query($conn,$sql1);
	$result2 = pg_query($conn,$sql2);
	$row2=pg_fetch_array($result2);
?>
<section>
<br/><br/>
<form name="empleado" method="post" action="../admin/modificarempleado.php" onsubmit="return validarem()">
<center>
<table width="1600" border="3" bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<font color="#663333" size="6">Editar empleado</font>
</th>
</tr>
  <tr>
    <td width="251" align="center"><br/><input type="hidden" name="id" id="codigo" value="<?php echo $row2['0']; ?>"/>
		<br/>
<p> <label><strong>Nombres:</strong>
  <input type="text" name="nombre" id="nombre" placeholder="Digite el nombre" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" value="<?php echo $row2['2']; ?>"></label></p>
<p> <br/><label><strong>Apellidos:</strong>
  <input type="text" name="apellidos" id="apellido" placeholder="Digite los apellidos" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" value="<?php echo $row2['3']; ?>"></label></p>
  </td>
    <td width="267" align="center"><p> <label><strong>C&eacute;dula:</strong>
  <input type="number" name="cedula" id="cedula" placeholder="Digite la c&eacute;dula" onkeypress="return numero(event)" value="<?php echo $row2['1']; ?>"></label></p>
<p> <br/><label><strong>Contrase&ntilde;a:</strong>
  <input type="password" name="contra" id="contrasena" placeholder="Digite la contrase&ntilde;a" value="<?php echo $row2['5']; ?>"></label></p>
  <p> <br/><label><strong>Correo:</strong>
  <input type="text" name="correo" id="correo" placeholder="Digite el correo" value="<?php echo $row2['4']; ?>"></label></p></td>
    <td width="316" align="center"><p> <strong>G&eacute;nero:</strong>
  <input type="radio" name="genero" value="M" checked>Masculino
<input type="radio" name="genero" value="F">Femenino</p>
<p> <br/><label><strong>Fecha nacimiento:</strong>
  <input type="date" name="nacer" id="fchnacimiento" value="<?php echo $row2['8']; ?>"></label></p>
 <label><br/><strong>Cargo:</strong>
  <select name="cargo">
  <?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
</td>
    <td width="380" align="center"><br/><p> <label><strong>Direcci&oacute;n:</strong>
  <input type="text" name="direccion" id="direccion" placeholder="Ingrese la direcci&oacute;n" onkeyup="return mayuscula(this)" value="<?php echo $row2['9']; ?>"></label></p>
<p> <br/><label><strong>Departamento:</strong>
  <input type="text" name="depto" id="depto" placeholder="Ingrese el departamento" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" value="<?php echo $row2['11']; ?>"></label></p>
<p> <br/><label><strong>Ciudad:</strong>
  <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" value="<?php echo $row2['10']; ?>"></label></p>
  <p> <br/><label><strong>Tel&eacute;fono: </strong>
  <input type="tel" name="tel" id="telefono" placeholder="Digite el tel&eacute;fono" onkeypress="return numero(event)" value="<?php echo $row2['6']; ?>"></label></p><br/>
</td>
  </tr>
  <tr>
    <td height="66" colspan="4" align="center"><button type="submit">
 <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
Modificar
 </button> 
		<button type="button"><img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle"><a href="../admin/verempleado.php">Volver</a></img></button>
		</td>
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