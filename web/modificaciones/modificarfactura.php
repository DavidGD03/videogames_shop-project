<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Editar factura"; 
	 encabezado($titulo);
include("../admin/menu.php");
extract($_POST);
?>
<center>
<table width="750" height="150" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?php
$sql1="UPDATE factura SET totaldes='".$descu."',iva='".$iva."',total='".$total."',fecha='".$fecha."',id_usuario='".$usuario."',estadopago='".$estado."',subtotal='".$subtotal."',direccion='".$direc."',depto='".$depto."',ciudada='".$ciudad."' where idfac='".$id."'";
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
header( "refresh:5;url=../consultas/verfactura.php" );
?>
	</table></center>
	<br/><br/>
</section>
	
	<?php
include('../admin/footer.php');
?>
</body>
</html>