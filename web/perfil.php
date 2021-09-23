<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Perfil"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['user'];
if ( isset ( $_SESSION['nickname'] ) ) {
$id2=$_SESSION['id'];
}
	 $sql2="select * from usuario where iduser='".$id."'";
	$result2 = pg_query($conn,$sql2);
	$row2=pg_fetch_array($result2);
if (isset($_GET["agregado"])=="si") {
	$var = "Solicitud enviada con éxito";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["agregadof"])=="no") {
	$var = "Ya le habías enviado una solicitud a este usuario.";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
<br/><br/>
<form method="post" action="anadiramigo.php">
<center>
<table width="938" border="4" bgcolor="#9BCDED">
  <tr>
    <th height="52" colspan="3"><br/><font color="#663333" size="6"> Perfil de <?php echo $row2['4']; ?></font></th>
	  <br/>
  </tr>
  <tr>
	  <input type="hidden" name="id" id="codigo" value="<?php echo $row2['0']; ?>"/>
    <td width="303" align="center">
<p> <br/><strong>Nombres: </strong><?php echo $row2['1']; ?><br/>
		</p>
	<p> <br/><strong>Apellidos: </strong><?php echo $row2['2']; ?><br/>
		</p>	
	<p> <br/><strong>Dinero: </strong><?php echo $row2['3']; ?><br/>
		</p>
		<p> <br/><strong>Nickname: </strong><?php echo $row2['4']; ?><br/><br/>
		</p></td>
	
	
	<td width="303" align="center">
		<p> <br/><strong>Correo: </strong><?php echo $row2['5']; ?><br/>
		</p>
		<p> <br/><strong>Género: </strong><?php echo $row2['7']; ?><br/>
		</p>
		<p> <br/><strong>Fecha de nacimiento: </strong><?php echo $row2['8']; ?><br/>
		</p>
		<p> <br/><strong>Puntos: </strong><?php echo $row2['9']; ?><br/><br/>
		</p>
		</td>
	
	
	<td width="303" align="center">
		<p> <br/><strong>País: </strong><?php echo $row2['10']; ?><br/>
		</p>
		<p> <br/><strong>Teléfono: </strong><?php echo $row2['12']; ?><br/><br/>
		</p>
		</td>
	</tr>
	<?php 
	if ( isset ( $_SESSION['nickname'] ) ) {
	if ($id != $id2 ) { 
		?>
  <tr>
    <td height="66" colspan="4" align="center"><button type="submit">
 <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
Agregar amigo
 </button></form>
		<button type="button">
 
			<a href="enviarmensaje.php?id=<?php echo $id; ?>"><img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
				Enviar mensaje</a>
			</button>
	</tr>
	<?php
	}}
	?>
</table></center>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>