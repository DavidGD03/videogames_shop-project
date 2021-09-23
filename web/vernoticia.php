<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Ver noticia"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['id'];
	 $sql2="select * from noticia where idnot='".$id."'";
	$result2 = pg_query($conn,$sql2);
	$row2=pg_fetch_array($result2);
$sql1="select * from usuario where iduser='".$row2['4']."'";
$result1 = pg_query($conn,$sql1);
	$row1=pg_fetch_array($result1);
if (isset($_GET["agregado"])=="si") {
	$var = "Solicitud enviada con éxito";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["agregadof"])=="no") {
	$var = "La solicitud no ha podido ser enviada";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
<br/><br/>
<form method="post" action="anadiramigo.php">
<center>
<table width="938" border="4" bgcolor="#3F9DD8">
  <tr>
    <th height="52" colspan="3"><br/><font color="#663333" size="6"> <?php echo $row2['2']; ?></font></th>
	  <br/>
  </tr>
	<tr>
	<th height="52" colspan="3"><br/><font color="#663333" size="4"> Creada por: <a href="perfil.php?user=<?php echo $row2['4']; ?>"><?php echo $row1['1']; ?>. </a> Fecha: <?php echo $row2['1']; ?></font></th>
	  <br/>
	</tr>
  <tr>
    <td width="303" align="center">
<p> <br/><?php echo $row2['3']; ?><br/>
		</p><br/>
	</td>
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