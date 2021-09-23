<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Editar usuario"; 
	 encabezado($titulo);
include("../admin/menu.php");
extract($_POST);
?>
<center>
<table width="750" height="150" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?php
$sql1="UPDATE usuario SET nombre='".$nombre."',apellido1='".$apellidos2."',dinero='".$dinero."',nickname='".$nickname."',correo='".$correo."',contrasena='".$contra."', genero='".$genero."',fchnacimiento='".$nacer."',puntos='".$puntos."',pais='".$pais."',id_nivel='".$nivel."',telefono='".$tel."' where iduser='".$id."'";
$result1=pg_query($conn,$sql1);

if ($result1==0)
{
	echo "<br/><br/>";
	echo "<font size='5' color='red'>LOS DATOS NO SE PUDIERON MODIFICAR CORRECTAMENTE<br/>";
	echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
}
	else {
		echo "<br/><br/>";
	echo "<font size='5' color='green'>LOS DATOS SE MODIFICARON CORRECTAMENTE<br/>";
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