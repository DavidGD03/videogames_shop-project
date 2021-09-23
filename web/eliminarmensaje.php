<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
$id=$_GET['id'];
$sql = "delete from mensajes_usuario where id='".$id."'";
$result = pg_query($conn, $sql);
if ($result==0){
	
}
else{
header("Location: mismensajes.php?eliminado=si"); }
?>