<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Ingresar a Virtual Game"; 
	 encabezado($titulo);
	 include("menu.php");
?>
<section>
<br/><br/><br/><br/>
<form name="login" method="post" action="validar.php">
<center><table width="500" border="3" bgcolor="#9BCDED">
  <tbody>

  
		  <?php 
					if (isset($_GET["error"])=="si")
					{
				?> 
		  <tr>
      <th height="61" colspan="4" align="center" bgcolor="red">
					<font color="#FFFFFF" size="5"><b>ALERTA: Los datos ingresados fueron incorrectos</b> </font>
		  </th></tr>
				<?php
						
					}
	  			if (isset($_GET["errorlog"])=="si")
				{
				?> 
	   <tr>
      <th height="61" colspan="4" align="center" bgcolor="red">
					<font color="#FFFFFF" size="5"><b>ALERTA: Debe ingresar para hacer dicha acción</b> </font>
		  </th></tr>
	  <?php
						
					}
	  if (isset($_GET["salir"])=="si")
				{
	  ?>
	  <tr>
      <th height="61" colspan="4" align="center" bgcolor="#436417">
					<font color="#FFFFFF" size="5"><b>Ha salido de la sesión correctamente</b> </font>
		  </th></tr>
	  <?php
						
					}
	  ?>
	  <?php
	  if (isset($_GET["caducado"])=="si")
				{
	  ?>
	  <tr>
      <th height="61" colspan="4" align="center" bgcolor="red">
					<font color="#FFFFFF" size="5"><b>Se ha caducado la sesión, inicia de nuevo</b> </font>
		  </th></tr>
	  <?php
						
					}
	  ?>
		<tr>
 <th height="61" colspan="4" align="center">
<font size="8">Iniciar sesión</font>
</th>
    </tr>
    <tr>
      <td align="center"><br/>   <p><br/> <label><strong>Nickname:</strong>
    <input type="text" name="nickname" placeholder="Digite el nickname" required></label></p>
<p> <br/><label><strong>Contraseña:</strong>
  <input type="password" name="contra" placeholder="Digite la contraseña" required></label></p>
	<br/><br/></font>
	<button>
  <img src="enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button><br/>
	</td>
    </tr>
  </tbody>
	</table></center>
	</form>

<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>