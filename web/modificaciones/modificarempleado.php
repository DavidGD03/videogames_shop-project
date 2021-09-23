<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Editar empleado"; 
	 encabezado($titulo);
include("../admin/menu.php");
extract($_POST);
?>
<center>
<table width="750" height="150" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?php
$sql1="UPDATE empleado SET cedula='".$cedula."', nombre='".$nombre."', apellido1='".$apellidos."',correo='".$correo."',contrasena='".$contra."', telefono='".$tel."', genero='".$genero."', fchnacimiento='".$nacer."', direccion='".$direccion."', ciudad='".$ciudad."', departamento='".$depto."', id_cargo='".$cargo."' where idem='".$id."'";
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
header( "refresh:5;url=../consultas/verempleado.php" );
?>
	</table></center>
	<br/><br/>
</section>
	
	<?php
include('../admin/footer.php');
?>
</body>
</html>