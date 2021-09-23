<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Ver juego"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['juego'];
	 $sql2="select * from resena where id_juego='".$id."'";
	$result2 = pg_query($conn,$sql2);
$sql1="select * from juego where idjuego='".$id."'";
$result1 = pg_query($conn,$sql1);
	$row1=pg_fetch_array($result1);
?>
<section>
<br/><br/><br/><br/>
	<?php
	$numrows = pg_numrows($result2);
	if ($numrows==0)
	{
		 echo "<center>
		 <table width='800' border='4' bgcolor='#3F9DD8'>
		 <tr>
    <th><font size='6'><br/>ATENCIÓN: <br/>AÚN NO HAY RESEÑAS PARA ESTE JUEGO<br/><br/></font></th>
  </tr></table></center>";
	}
	else
	{
	?>
	<center>
<table width="1500" border="4" bgcolor="#3F9DD8">
  <tr>
    <th height="52" colspan="4"><br/><font color="#663333" size="6"> Reseñas de <?php echo $row1['4']; ?><br/><br/></font></th>
	  <br/>
  </tr>
	<tr>
	<th>Estrellas</th>
		<th>Descripción</th>
		<th>Fecha</th>
		<th>Usuario</th>
	  <br/>
	</tr>
	<?php
	while($row2=pg_fetch_array($result2)) 
							{  ?>
  <tr>
    <td >
<p> <br/><?php echo $row2['2']; ?><br/>
		</p><br/>
	</td>
	  <td align="justify">
	  <p> <br/><br/> <?php echo $row2['3']; ?><br/>
		</p>
	  </td>
	  <td>
		  
	  <?php 
						$sql3="select * from usuario where iduser='".$row2['0']."'";
$result3 = pg_query($conn,$sql3);
	$row3=pg_fetch_array($result3);	 
							 echo $row2['4']; ?>
	  </td>
	  <td>
	  <?php echo $row3['0']; ?>
	  </td>
	</tr>
	<?php }
							 ?>
	<tr>
	<th height="52" colspan="4">
		<br/>
		<button><a href='verjuego.php?juego=<?php echo $id; ?>'><img src='enviar.svg' alt='Enviar' width='32' height='32' style='vertical-align: middle'>
			Volver</a>
</button>
		<br/><br/>
		
		</th>
	
	</tr>
</table></center>
	<?php
	}
	?>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>