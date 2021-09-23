<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Razón social - VG"; 
	 encabezado($titulo);
	 include("menu.php");
?>

<section>
<br/><br/><br/><br/><br/>
<center>
  <table width='1000' border='3' bgcolor="#9BCDED"><tr>
    <th><font size="+4" face="Comic Sans MS, Arial, MS Sans Serif" color="black">Razón social</font></th>
  </tr>
				
										<tr>
	  <th><br/><font size="+2"  face="Comic Sans MS, Arial, MS Sans Serif" color="black">La empresa Virtual Game se encarga de vender videojuegos mediante su tienda virtual a personas de todo el mundo. Esta posee juegos de diferentes categorías creados por desarrolladores y empresas reconocidas, los cuales brindan un pequeño porcentaje de sus ventas a la empresa para que sus juegos permanezcan en la web. Estos juegos vienen en formato digital, por lo que el envío será instantáneo luego de que el cliente complete el pago.</font><br/><br/></th>
	  </tr>
</table>

</center>
<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>