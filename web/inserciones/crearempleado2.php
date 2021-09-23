<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Admin VG"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from cargo";
    $result = pg_query($conn,$sql1);
?>
<section>
<br/> <br/>
<form action="crearempleado.php">
<center>
<table width="1241" height="224" border="3"  bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							$codigo = $_POST["codigo"];
							$nombre = $_POST["nombre"];
							$apellido = $_POST["apellidos"];
							$cedula = $_POST["cedula"];
							$contrasena = $_POST["contra"];
							$correo= $_POST["correo"];
							$genero=$_POST["genero"];	       
							$nacer=$_POST["nacer"];                           
							 $telefono=$_POST["tel"];
							$cargo=$_POST["cargo"];
							$direccion=$_POST["direccion"];
							$departamento=$_POST["depto"];
							$ciudad=$_POST["ciudad"];                                  													

							$sql3="insert into empleado (idem, cedula, nombre, apellido1, correo, contrasena, telefono, genero, fchnacimiento, direccion, ciudad, departamento, id_cargo) values ('$codigo','$cedula', '$nombre','$apellido','$correo','$contrasena','$telefono','$genero','$nacer','$direccion','$ciudad','$departamento','$cargo')";

							$result = pg_query($conn, $sql3);	


				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{					
									echo"<br/><br/><font size='12'>LOS  DATOS SE  INSERTARON  CORRECTAMENTE"; 
									echo "</font></br><br/>"; 
								}

						?>

</th>
</tr>
  <tr>
    <td height="61" colspan="4" align="center"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Volver
</button></td>
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