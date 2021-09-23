<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
$id=$_POST['id'];
$iduser=$_SESSION['id'];
$sql = "insert into amigos_usuario (id_receptor,id_emisor,estado) values ('$id','$iduser','Pendiente')";
$result = pg_query($conn, $sql);
if ($result==0){

	header("Location: perfil.php?agregadof=no&user=".$id."");
}
else {
header("Location: perfil.php?agregado=si&user=".$id.""); 
}
?>