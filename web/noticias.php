<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Noticias - VG"; 
	 encabezado($titulo);
	 include("menu.php");
$sql1="select * from noticia ORDER BY fecha DESC LIMIT 3 ";
    $result = pg_query($conn,$sql1);
?>
<section><br/><br/><br/><br/>
	
					
<div class="heading">
			<h1>TODAS LAS NOTICIAS</h1>
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