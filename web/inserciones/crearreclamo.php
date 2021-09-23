<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Crear reclamo - VG"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from juego";
	 $sql2="select * from usuario";
    $result = pg_query($conn,$sql1);
	$result2 = pg_query($conn,$sql2);
?>
<section>
<br/><br/>
<form method="post" action="../admin/crearreclamo2.php" onsubmit="return validarRec()">
<center>
<table width="1300" border="4" bgcolor="#9BCDED">
  <tr>
    <th height="52" colspan="3"><font color="#663333" size="6"> Formulario para crear reclamos</font></th>
  </tr>
  <tr>
    <td width="303" align="center"><p><label> <br/><strong>C&oacute;digo:</strong>
    <input type="number" name="codigo" id="codigo" placeholder="Digite el c&oacute;digo" onkeypress="return numero(event)" ></label></p>
<p><label> <br/><strong>T&iacute;tulo:</strong>
  <input type="text" name="titulo" id="titulo" placeholder="Digite el t&iacute;tulo" ></label></p>
  <p><label> <br/><strong>Descripci&oacute;n:</strong>
    <textarea name="desc" id="descripcion" cols="26" rows="3" placeholder="Digite la descripci&oacute;n" ></textarea></label> </p><br/></td>
    <td width="293" align="center"><br/> <p> <strong>Motivo:</strong>
  <select name="motivo">
  <option>El juego no funciona</option>
  <option>La clave del juego est&aacute; da&ntilde;ada</option>
  <option>No me gust&oacute; mi juego</option>
  <option>Otro</option></select></p>
<p> <label><br/><strong>Fecha:</strong>
  <input type="date" name="fecha" id="fecha"></label></p>
<p> <br/><strong>Estado:</strong>
  <select name="estado">
  <option>Pendiente</option>
  <option>Resuelto</option></select></p><br/></td>
    <td width="314" align="center"> <p> <br/><label><strong>Horas jugadas:</strong>
    <input type="number" name="horas" id="horas" placeholder="Digite las horas jugadas" step="1" ></label></p>
  <p> <strong><br/>Plataforma:</strong>
  <select name="plataf">
  <option>Computadora</option>
  <option>Xbox</option>
  <option>PlayStation</option></select></p>
<p> <label><strong>Juego:</strong>
   <select name="juego">
  <?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["4"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select></label></p>
<p> <br/><label><strong>Usuario afectado:</strong>
   <select name="usuario">
  <?PHP
while($row = pg_fetch_array($result2)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select></label></p><br/></td>
  </tr>
  <tr>
    <td height="68" colspan="3" align="center"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="reset">
  <img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle">
  Borrar
</button></td>
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