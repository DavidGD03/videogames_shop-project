<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Ver juego"; 
	 encabezado($titulo);
	 include("menu.php");
$id=$_GET['id'];
	 $sql2="select * from juego where idjuego='".$id."'";
	$result2 = pg_query($conn,$sql2);
	$row2=pg_fetch_array($result2);
$sql1="select * from desarrollador where iddes='".$row2['5']."'";
$result1 = pg_query($conn,$sql1);
	$row1=pg_fetch_array($result1);
?>
<section>
<br/><br/>
<center>
<table width="1500" border="4" bgcolor="#9BCDED">
  <tr>
    <th height="52" colspan="3" bgcolor="#7B93FA"><br/><font color="#663333" size="6"> <?php echo $row2['4']; ?></font><br/><br/></th>
	  <br/>
  </tr>
	<tr>
	<th height="52" colspan="3"><br/><font color="#663333" size="4"> Creado por: <?php echo $row1['1']; ?> Fecha de publicación: <?php echo $row2['8']; ?></font></th>
	  <br/>
	</tr>
  <tr>
    <td align="justify" width="700">
<p> <br/><b><center>Descripción:</center><br/></b> <?php echo $row2['6']; ?><br/>
		</p><br/>
	</td>
	  <td align="justify">
	  <p> <br/><b><center>Requerimientos:</center></b><br/> <?php echo $row2['9']; ?><br/>
		</p>
	  </td>
	</tr>
	<tr>
	<th height="52" colspan="3">
		<button><a href='anadircarrito2.php?juego=<?php echo $id; ?>'><img src='carrito.png' alt='Enviar' width='32' height='32' style='vertical-align: middle'>
			Añadir al carrito</a>
</button>
		<button><a href='anadirlista2.php?juego=<?php echo $id; ?>'><img src='corazon.jpg' alt='Enviar' width='32' height='32' style='vertical-align: middle'>
  Agregar a lista
</button>
			<button><a href='verresena.php?juego=<?php echo $id; ?>'><img src='resena.jpg' alt='Enviar' width='32' height='32' style='vertical-align: middle'>
  Ver reseñas
</button>
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