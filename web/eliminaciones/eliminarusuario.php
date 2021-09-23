<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Eliminar usuario"; 
	 encabezado($titulo);
include("../admin/menu.php");
$id=$_GET['id'];
$sql = "DELETE FROM usuario WHERE iduser='".$id."'";
$result = pg_query($conn,$sql);
?>
<center>
<table width="750" height="150" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
	<?php
	if ($result==0)
{
	echo "<br/><br/>";
	echo "<font size='11' color='red'>LOS DATOS NO SE PUDIERON ELIMINAR CORRECTAMENTE<br/>";
	echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
}
	else {
		echo "<br/><br/>";
	echo "<font size='11' color='green'>LOS DATOS SE ELIMINARON CORRECTAMENTE<br/>";
	echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
	}
header( "refresh:5;url=../consultas/verusuario.php" );
?>
	</table></center>
	<br/><br/>
</section>
	
	<?php
include('../admin/footer.php');
?>
</body>
</html>