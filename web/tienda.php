<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Tienda - VG"; 
	 encabezado($titulo);
	 include("menu.php");
$sql2="select * from juego ORDER BY nombre DESC";
$result2=pg_query($conn,$sql2);
if (isset($_GET["agregado"])=="si") {
	$var = "Producto agregado al carrito";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["agregadof"])=="no") {
	$var = "ERROR: El producto seleccionado ya fue agregado previamente y no puede ser agregado al carrito";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["agregadolista"])=="si") {
	$var = "Producto agregado a la lista de deseos";
	echo "<script> alert('".$var."'); </script>";
}
if (isset($_GET["agregadolista2"])=="no") {
	$var = "ERROR: El producto seleccionado ya fue agregado previamente y no puede ser agregado a la lista de deseos";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
	<div class="latest-product">
	<div class="container wrap"> <!--Alredy define-->
		<div class="heading">
			<h1>TODOS LOS JUEGOS</h1>
			<div class="underline"></div>
		</div>
		<div class="row">
		<?php
			$n=0;
		while($row2 = pg_fetch_array($result2)) { 
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
			if ($row2['2'] > 0)
			{
				echo "<span class='product-label'>Descuento</span>
				<span class='product-label-discount'>".$row2['2']."</span>";
			}
				echo "
				<ul class='icon'>
				<li><a href='anadircarrito2.php?juego=".$row2['0']."'><i class='fas fa-cart-plus'></i></a></li>
				<li><a href='anadirlista2.php?juego=".$row2['0']."'><i class='fas fa-heart'></i></a></li>
				<li><a href='verjuego.php?id=".$row2['0']."'><i class='fas fa-eye'></i></a></li>
				</ul>
				<a class='add-to-cart' href='anadircarrito2.php?juego=".$row2['0']."'>Agregar al carrito</a>
				</div>
				<div class='product-detail'>
				<div class='product-title'>
				<h3><a href='#'>".$row2['4']."</a></h3>
				</div>
				<div class='product-price'>$
				".$row2['1']."</div></div></div></div>
				";
			
		}
			?>
					</div></div></div>
					

<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>