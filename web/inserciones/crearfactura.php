<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Crear factura"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from usuario";
    $result = pg_query($conn,$sql1);
?>
<section>
<br/><br/>
<form name="factura" method="post" action="../admin/crearfactura2.php" onsubmit="return validarFac()">
<center>
<table width="1400" border="4" bgcolor="#9BCDED">
  <tr>
    <th height="60" colspan="3"><font color="#663333" size="6">Formulario para crear facturas</font></th>
  </tr>
  <tr>
    <td width="268" align="center"><br/><p> <label><strong>C&oacute;digo:</strong>
    <input type="number" name="codigo" id="codigo" placeholder="Digite el c&oacute;digo" onkeypress="return numero(event)" ></label></p>
    <br/><p> <strong>Estado del pago:</strong>
  <select name="estado">
  <option>Pagado</option>
  <option>Pendiente</option>
  <option>Cancelado</option></select></p>
  <br/><p> <label><strong>Fecha:</strong>
  <input type="date" name="fecha" id="fecha"></label></p><br/></td>
    <td width="266" align="center"> <p><br/> <label><strong>Descuento:</strong>
    <input type="number" name="descu" id="descuento" placeholder="En porcentaje" max=100 step=5 onkeypress="return numero(event)" ></label></p>
<p><br/> <label><strong>IVA:</strong>
    <input type="number" name="iva" id="iva" placeholder="Digite el IVA" onkeypress="return numero(event)" ></label></p>
<p><br/> <label><strong>Subtotal:</strong>
  <input type="number" name="subtotal" id="subtotal" placeholder="Digite el subtotal" onkeypress="return numero(event)" ></label></p>
  <p> <br/><label><strong>Total:</strong>
  <input type="number" name="total" id="total" placeholder="Digite el total" onkeypress="return numero(event)" ></label></p><br/></td>
  <td width="400" align="center">
  <p> <br/><label><strong>Usuario:</strong>
  <select name="usuario">
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
  <p><br/> <label><strong>Direcci&oacute;n de facturaci&oacute;n:</strong>
  <input type="text" name="direc" id="direccion" placeholder="Ingrese la direccion" onkeyup="return mayuscula(this)" ></label></p>
  <p> <br/><label><strong>Ciudad de facturaci&oacute;n:</strong>
  <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" ></label></p>
  <p> <br/><label><strong>Departamento de facturaci&oacute;n:</strong>
  <input type="text" name="depto" id="depto" placeholder="Ingrese el departamento" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" ></label></p>
<br/>
  </td>
  </tr>
  <tr>
    <td height="67" colspan="3" align="center"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="reset">
  <img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle">
  Borrar
</button></td>
  </tr>
</table>

</center>
</form>
<br/><br/><br/>
</section>
<?php
include('../admin/footer.php');
?>
</body>
</html>