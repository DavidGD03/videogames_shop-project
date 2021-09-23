<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Comprar"; 
	 encabezado($titulo);
	 include("menu.php");
	 $sql1="select * from usuario";
    $result = pg_query($conn,$sql1);
extract($_POST);
$iduser=$_SESSION['id'];
?>
<section>
<br/><br/>
<form name="compra" method="post" action="comprar2.php" onsubmit="return validarFac()">
<center>
<table width="956" border="4" bgcolor="#62AAD8">
  <tr>
    <th height="60" colspan="3"><font color="#663333" size="6">Proceso de compra</font></th>
  </tr>
  <tr>
    <td width="268" align="center"><br/><p> <label><strong>C&oacute;digo:</strong>
    <input type="number" name="codigo" id="codigo" placeholder="Digite el c&oacute;digo de factura" onkeypress="return numero(event)" ></label></p>
<p><br/> <label><strong>IVA:</strong>
    <input type="number" name="iva" id="iva" placeholder="Digite el IVA" onkeypress="return numero(event)" ></label></p>
  <p> <br/><label><strong>Total:</strong>
  <input type="number" name="total" disabled="disabled" id="total" onkeypress="return numero(event)" value="<?php echo $total; ?>" ></label></p><br/></td>
  <td width="400" align="center">
  <p> <br/><label><strong>Usuario:</strong>
	  <input type="text" name="usuario" disabled="disabled" value="<?php echo $iduser; ?>" >
  </p>
  <p><br/> <label><strong>Direcci&oacute;n de facturaci&oacute;n:</strong>
  <input type="text" name="direc" id="direccion" placeholder="Ingrese la direccion" onkeyup="return mayuscula(this)" ></label></p>
  <p> <br/><label><strong>Ciudad de facturaci&oacute;n:</strong>
  <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" ></label></p>
  <p> <br/><label><strong>Departamento de facturaci&oacute;n:</strong>
  <input type="text" name="depto" id="depto" placeholder="Ingrese el departamento" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" ></label></p>
	  <input type='hidden' name='juegos' value='<?php serialize($juegos); ?>'></input>
	<input type="hidden" name="fecha" id="fecha" value="<?php echo $fechaActual; ?>">
	<input type="hidden" name="total" value="<?php echo $total; ?>">
	<input type="hidden" name="usuario" value="<?php echo $iduser; ?>">
<br/>
  </td>
  </tr>
  <tr>
    <td height="67" colspan="3" align="center"><button>
  <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="reset">
  <img src="borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle">
  Borrar
</button></td>
  </tr>
</table>

</center>
</form>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>