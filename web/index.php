<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Virtual Game - Inicio"; 
	 encabezado($titulo);
	 include("menu.php");
$sql1="select * from noticia ORDER BY fecha DESC LIMIT 3 ";
$sql2="select * from juego ORDER BY fecha DESC LIMIT 4 ";
    $result = pg_query($conn,$sql1);
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
if (isset($_GET["denegado"])=="si") {
	$var = "ERROR: No puedes acceder a esa parte de la administración";
	echo "<script> alert('".$var."'); </script>";
}
?>
<section>
	<div class="slideshow">
		<ul class="slider">
			<li>
				<img src="imagen/slider1.jpg" alt="">
				<section class="caption">
					<h1>Bienvenido a Virtual Game</h1>
					<h3><p>La nueva tienda virtual donde podrás comprar tus juegos favoritos.</p></h3>
				</section>
			</li>
			<li>
				<img src="imagen/slider2.jpg" alt="">
				<section class="caption">
					<font color="#000000"><h1>Descuentos siempre</h1>
					<h3><p>Tenemos una política de siempre tener descuentos, gracias a nuestro acercamiento con los desarrolladores.</p></h3></font>
				</section>
			</li>
			<li>
				<img src="imagen/slider3.jpg" alt="">
				<section class="caption">
			<font color="white"><h1>FIFA 20 YA DISPONIBLE</h1>
					<h3><p>El juego de fútbol más popular del mundo ya está disponible en nuestro sitio. <a href="verjuego.php?id=20">Compralo aquí.</a></p></h3></font>
				</section>
			</li>
			<li>
				<img src="imagen/slider4.jpg" alt="">
				<section class="caption">
					<h1>NEED FOR SPEED DISPONIBLE</h1>
					<h3><p>Uno de los mejores juegos de carreras del año está disponible en Virtual Game. <a href="verjuego.php?id=30">Compralo aquí.</a></h3></p>
				</section>
			</li>
		</ul>

	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>
	<br/><br/><br/>
	<div class="features-section">
	<div class="container"> <!--Already define in css-->
		<div class="features-inner">
		
			<div class="features-box">
				<div class="features-icon">
					<img src="img/shipped.png" alt="free-delivery">
				</div>
				<h1>Envío instantáneo</h1>
				<p>Todos los envíos son instantáneos.</p>
			</div>
		
		
			<div class="features-box">
				<div class="features-icon">
					<img src="img/return-to-the-past.png" alt="return-policy">
				</div>
				<h1>Rápida asistencia</h1>
				<p>Te respondemos en menos de 24 horas.</p>
			</div>
			
			
			<div class="features-box">
				<div class="features-icon">
					<img src="img/support.png" alt="Support">
				</div>
				<h1>Soporte a toda hora</h1>
				<p>Atención en todo instante</p>
			</div>
			
			
			<div class="features-box">
				<div class="features-icon">
					<img src="img/credit-card.png" alt="secure payment">
				</div>
				<h1>Pago seguro</h1>
				<p>Tu tarjeta está segura con nosotros</p>
			</div>
		
		
		</div>
	
	</div>
	
</div>	
	<div class="latest-product">
	<div class="container wrap"> <!--Alredy define-->
		<div class="heading">
			<h1>ÚLTIMOS JUEGOS</h1>
			<div class="underline"></div>
		</div>
		<div class="row">
		<?php
		while($row2 = pg_fetch_array($result2)) { 
		?>
			
			<div class="column">
				<div class="product-grid">
					<div class="product-img">
						<?php
			echo "<a href='juego.php?id=".$row2['0']."'>
			<img class='pic-1' src='imagen/".$row2['3']."' alt='".$row2['4']."'>
			<img class='pic-2' src='imagen/".$row2['10']."' alt='".$row2['4']."'>
			</a>";
			if ($row2['2'] > 0)
			{
				echo "<span class='product-label'>Descuento</span>
				<span class='product-label-discount'>".$row2['2']."</span>";
			}
				echo "
				<ul class='icon'>
				<li><a href='anadircarrito.php?juego=".$row2['0']."'><i class='fas fa-cart-plus'></i></a></li>
				<li><a href='anadirlista.php?juego=".$row2['0']."'><i class='fas fa-heart'></i></a></li>
				<li><a href='verjuego.php?id=".$row2['0']."'><i class='fas fa-eye'></i></a></li>
				</ul>
				<a class='add-to-cart' href='anadircarrito.php?juego=".$row2['0']."'>Agregar al carrito</a>
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
					
<div class="heading">
			<h1>ÚLTIMAS NOTICIAS</h1>
			<div class="underline"></div><BR/>
		</div>
 <div class="blog-card">
	 <br/>
	 
	  <input type="radio" name="select" id="tap-1" checked>
      <input type="radio" name="select" id="tap-2">
      <input type="radio" name="select" id="tap-3">
      <input type="checkbox" id="imgTap">
      <div class="sliders">
        <label for="tap-1" class="tap tap-1"></label>
        <label for="tap-2" class="tap tap-2"></label>
        <label for="tap-3" class="tap tap-3"></label>
      </div>
	 <?php
	 $n=1;
	 while($row = pg_fetch_array($result)) { 
	 ?>
     
      <div class="inner-part">
        <label for="imgTap" class="img">
			<?php
		 echo "<img class='img-".$n."' src='imagen/".$row['5']."'></label>";
		 echo "<div class='content content-".$n."'>
		  <center><span>".$row['1']."</span></center>
		  <div class='title'>".$row['2']."</div>
		  <div class='text'>".$row['3']."</div>
		  <center><a href='vernoticia.php?id=".$row['0']."'><button>Leer más</button></a></center></div></div>
		 ";
		 $n++;
	 }
		 ?>
     
		</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>