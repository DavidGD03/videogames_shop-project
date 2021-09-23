<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Escribir reseña"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['juego'];
$sql1="select * from juego where idjuego='".$id."'";
$fechaActual= date('d-m-Y');
$result = pg_query($conn,$sql1);
$row=pg_fetch_array($result);
if (isset($_GET["enviado"])=="si") {
	$var = "Reseña enviada satisfactoriamente";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["enviadof"])=="no") {
	$var = "ERROR: La reseña no pudo ser enviada";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
<br/><br/>
<form name="mensaje" method="post" action="crearresena.php">
<center>
<table width="1053" border="4" bgcolor="#9BCDED">
<tr>
<th height="57" colspan="3">
<font color="#663333" size="6"> Hacer reseña de <?php echo $row['4']; ?></font>
</th>
</tr>
  <tr>
    <td width="321" align="center"><p><br/> <label><strong>Estrellas (1-5):</strong>
    <input type="number" name="estrellas" id="estrellas" placeholder="Estrellas (1-5)" step="1" max="5"></label></p>
<p> <br/><label><strong>Descripcion:</strong>
  <textarea name="desc" id="desc" cols="26" rows="7" placeholder="Digite su reseña" ></textarea></label><br/><br/></p>
		<input type="hidden" name="idusuario" value="<?php echo $_SESSION['id']; ?>"/>
		<input type="hidden" name="idjuego" value="<?php echo $id; ?>"/>
		<input type="hidden" name="fecha" id="fecha" value="<?php echo $fechaActual ?>">
	  </td>
    
  <tr>
    <th height="66" colspan="3"><button>
  <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="button"><a href='misjuegos.php'>
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