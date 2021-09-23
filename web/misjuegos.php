<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Tienda - VG"; 
	 encabezado($titulo);
	 include("menu.php");
$usuarioid=$_SESSION['id'];
$sql1="select * from juego j inner join factura_juego fj on j.idjuego = fj.id_juego inner join factura f on f.idfac=fj.id_factura where f.id_usuario='".$usuarioid."' and f.estadopago='Pagado'";
$result=pg_query($conn,$sql1);
?>
<section>
	<?php
	$numrows = pg_numrows($result);
	if ($numrows==0)
	{
		 echo "<br/><br/><br/><br/><center><table width='800' height='200' border='3' bgcolor='#9BCDED'>
		 <tr>
    <th><font size='6'>ATENCIÓN: <br/>NO TIENE NINGÚN JUEGO AÚN</font></th>
  </tr></table></center>";
	}
	else
	{ ?>
	<div class="latest-product">
	<div class="container wrap"> <!--Alredy define-->
		<div class="heading">
			<h1>MIS JUEGOS</h1>
			<div class="underline"></div>
		</div>
		<div class="row">
		<?php
			$n=0;
		while($row2 = pg_fetch_array($result)) { 
			if($n=='4')
			{
				echo "<div class='row'>";
			}
			if($n=='8')
			{
				echo "<div class='row'>";
			}
		?>
			
			<div class="column">
				<div class="product-grid">
					<div class="product-img">
						<?php
			echo "<a href='juego.php?id=".$row2['0']."'>
			<img class='pic-1' src='imagen/".$row2['3']."' alt='".$row2['4']."'>
			<img class='pic-2' src='imagen/".$row2['10']."' alt='".$row2['4']."'>
			</a>";
			$n++;
				echo "
				<ul class='icon'>
				<li><a href='verjuego.php?id=".$row2['0']."'><i class='fas fa-eye'></i></a></li>
				</ul>
				<a class='add-to-cart' href='escribirresena.php?juego=".$row2['0']."'>Reseñar juego</a>
				</div>
				<div class='product-detail'>
				<div class='product-title'>
				<h3><a href='#'>".$row2['4']."</a></h3>
				</div></div></div></div>
				";
			
		}
			?>
					</div></div></div>
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