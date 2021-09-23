<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Enviar mensaje"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['id'];
$sql1="select * from usuario where iduser='".$id."'";
$fechaActual= date('d-m-Y');
$result = pg_query($conn,$sql1);
$row=pg_fetch_array($result);
if (isset($_GET["enviado"])=="si") {
	$var = "Mensaje enviado satisfactoriamente";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["enviadof"])=="no") {
	$var = "ERROR: El mensaje no pudo ser enviado";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
<br/><br/>
<form name="mensaje" method="post" action="crearmensaje.php">
<center>
<table width="1053" border="4" bgcolor="#9BCDED">
<tr>
<th height="57" colspan="3">
<font color="#663333" size="6"> Enviar mensaje a <?php echo $row['1']; ?></font>
</th>
</tr>
  <tr>
    <td width="321" align="center"><p><br/> <label><strong>Asunto:</strong>
    <input type="text" name="asunto" id="codigo" placeholder="Digite el asunto" ></label></p>
<p> <br/><label><strong>Texto:</strong>
  <textarea name="texto" id="texto" cols="26" rows="7" placeholder="Digite el mensaje" ></textarea></label><br/><br/></p>
		<input type="hidden" name="idenvio" value="<?php echo $_SESSION['id']; ?>"/>
		<input type="hidden" name="idrecibe" value="<?php echo $id; ?>"/>
		<input type="hidden" name="fecha" id="fecha" value="<?php echo $fechaActual ?>">
	  </td>
    
  <tr>
    <th height="66" colspan="3"><button>
  <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="button"><a href='perfil.php?user=<?php echo $id; ?>'>
  <img src="borrar.svg" alt="Volver" width="32" height="32" style="vertical-align: middle">
  Volver</a>
</button></th>
  </tr>
</table></center>
</form>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>