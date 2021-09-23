<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Registro - VG"; 
	 encabezado($titulo);
	 include("menu.php");
extract($_POST);
?>
<section>
<br/> <br/>
<center>
<table width="1241" height="224" border="3" bordercolor="#000033" bgcolor="#AFCFBF">
<tr>
<th height="61" colspan="4" align="center">
<?PHP
							
					
								

							$sql3="insert into usuario (iduser,nombre,apellido1,nickname,correo,contrasena,genero,fchnacimiento,pais,telefono) values ('$codigo','$nombre', '$apellidos2','$nickname','$correo','$contra','$genero','$nacer','$pais','$tel')";

							$result = pg_query($conn, $sql3);	


				// Obtener el n&uacute;mero de filas:
							if ($row1=pg_fetch_array($result)) 
								{ 
								echo "<br/><br/>";
	echo "<font size='5' color='red'>ERROR: YA EXISTE UN USUARIO REGISTRADO ASÍ<br/>";
	echo "SERÁ REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
									echo $codigo=$row1["0"];
									echo $nombre=$row1["1"];
													
								}
							else 
								
								{					
									echo "<br/><br/>";
	echo "<font size='5' color='green'>TE HAS REGISTRADO CORRECTAMENTE<br/>";
	echo "SERÁS REDIRIGIDO EN 5 SEGUNDOS</font>";
	echo "<br/><br/>";
								}	
	header( "refresh:5;url=registrar.php" );
						?>

</th>
</tr>
</table></center>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>