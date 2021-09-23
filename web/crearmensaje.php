<?php
session_start();
include("conec.php"); 
     $conn=conectarse(); 
extract($_POST);
$iduser=$_SESSION['id'];
$sql = "insert into mensajes_usuario (asunto,texto,fecha,usuario_envio,usuario_recibe) values ('$asunto','$texto','$fecha','$idenvio','$idrecibe')";
$result = pg_query($conn, $sql);
if ($result==0){

	header("Location: enviarmensaje.php?enviadof=no&id=".$idrecibe."");
}
else {
header("Location: enviarmensaje.php?enviado=si&id=".$idrecibe.""); 
}
?>