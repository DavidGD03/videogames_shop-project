<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Crear noticia"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
$empleado=$_SESSION['id'];
?>
<section>
<br/><br/>
<form name="noticia" method="post" action="../admin/crearnoticia2.php" enctype="multipart/form-data">
<center>
<table width="1053" border="4" bgcolor="#8AC5EB">
<tr>
<th height="57" colspan="3">
<font color="#663333" size="6"> Formulario para crear noticias</font>
</th>
</tr>
  <tr>
    <td width="321" align="center"><p><br/> <label><strong>C&oacute;digo:</strong>
    <input type="number" name="codigo" id="codigo" placeholder="Digite el c&oacute;digo" ></label></p>
<p> <br/><label><strong>Título:</strong>
  <input type="text" name="titulo" id="titulo" placeholder="Digite el titulo" ></label></p>
		<p> <br/><label><strong>Descripci&oacute;n:</strong>
			<textarea name="desc" id="descripcion" cols="26" rows="3" placeholder="Digite la descripci&oacute;n" ></textarea></label> </p><br/>
			</td>
			 <td width="379" align="center">
		<p> <br/><label><strong>Fecha de publicaci&oacute;n:</strong>
  <input type="date" name="fecha" id="fecha"></label></p><br/>
	  <p> <br/><strong>Imagen:</strong>
  <input type="file" name="imagen" id="imagen"></p><br/>
		<input type="hidden" name="empleado"  value="<?php echo $empleado; ?>">
	  </td>
    
  <tr>
    <th height="66" colspan="3"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="reset">
  <img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle">
  Borrar
</button></th>
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