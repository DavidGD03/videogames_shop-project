<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
$id=$_GET['juego'];
if ( !isset ( $_SESSION['nickname'] ) ) {
	header("Location: login.php?errorlog=si");
	exit();
}
$iduser=$_SESSION['id'];
$sql = "insert into carrito (usuario,juego) values ('".$iduser."','".$id."')";
$result = pg_query($conn, $sql);
if ($result==0){

	header("Location: index.php?agregadof=no");
}
else{
header("Location: index.php?agregado=si"); }
?>