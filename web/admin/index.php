<?php
include("conec.php"); 
     $conn=conectarse(); 
   include("encabezado.php");
     $titulo="Ver empleados"; 
	 encabezado($titulo);
	 include("menu.php");
	$nickname=$_SESSION['nickname'];
?>
<section>
<br/><br/><br/><br/>
<center><table width="820" border="3" bgcolor="#9BCDED">
  <tbody>
    <tr>
      <th height="61" colspan="4" align="center">
<font color="#663333" size="8">Bienvenido <?php echo $nickname; ?></font>
</th>
    </tr>
    <tr>
      <td align="center"><br/>   <font size="6">     Aquí es donde se administra todo el sitio web de <strong>Virtual Game</strong> y podrás controlar todo lo que pasa en esta gran empresa. 
	<br/><br/></font>
	</td>
    </tr>
  </tbody>
	</table></center>

<br/><br/><br/>
</section>
<?php
include('footer.php');
?>
</body>
</html>