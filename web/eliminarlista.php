<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
$id=$_GET['id'];
$sql = "delete from listadeseos where id_juego='".$id."'";
$result = pg_query($conn, $sql);
if ($result==0){
	
}
else{
header("Location: lista.php?eliminado=si"); }
?>