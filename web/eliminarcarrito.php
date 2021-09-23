<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
$id=$_GET['id'];
$sql = "delete from carrito where juego='".$id."'";
$result = pg_query($conn, $sql);
$_SESSION['carrito']=array_diff($_SESSION['carrito'],$id);
if ($result==0){
	
}
else{
header("Location: carrito.php?eliminado=si"); }
?>