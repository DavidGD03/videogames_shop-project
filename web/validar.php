<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conec.php"); 
 $conn=conectarse(); 
 extract($_POST);
 //echo $conn;
$sql1="Select * from usuario  where nickname='".$nickname."' and contrasena ='".$contra."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				header("Location: login.php?error=si");
				}
				else 
				{
				$row1 = pg_fetch_array($result1);
				$cargo = $row1["13"];
					$id=$row1["0"];
				
				$_SESSION["nickname"]=$nickname;
				$_SESSION["rango"]=$cargo;
				$_SESSION["id"]=$id;
				
				header("Location: index.php"); 	

				}
?>