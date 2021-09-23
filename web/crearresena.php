<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
extract($_POST);
$iduser=$_SESSION['id'];
$sql = "insert into resena (id_usuario,id_juego,estrellas,descripcion,fecha) values ('$idusuario','$idjuego','$estrellas','$desc','$fecha')";
$result = pg_query($conn, $sql);
if ($result==0){

	header("Location: misjuegos.php");
}
else {
header("Location: misjuegos.php"); 
}
?>