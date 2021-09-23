<?PHP
 //función de encabezado y colocación del titulo
 function encabezado($titulo)
 {
 $encabezado="<!DOCTYPE html>
<html lang='es'>
<head><meta charset='utf-8'>
<meta name='description' content='Admin VG'>
<meta name='keywords' content='Virtual,Game,Admin'>
<link rel='stylesheet' type='text/css' href='../css/menu.css' media='screen' />
<link rel='stylesheet' type='text/css' href='../css/web.css' media='screen' />
 <title>$titulo</title></head>";
 session_start();
	 if(isset($_SESSION['tiempo']) ) {

        $inactivo = 300;

        //Calculamos tiempo de vida inactivo.
        $vida_session = time() - $_SESSION['tiempo'];

            //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
            if($vida_session > $inactivo)
            {
                //Removemos sesión.
                session_unset();
                //Destruimos sesión.
                session_destroy();              
                //Redirigimos pagina.
                header("Location: login.php?caducado=si");

                exit();
            }

    }
    $_SESSION['tiempo'] = time();
	 
	 if ( isset ( $_SESSION['nickname'] ) ) {
	$id=$_SESSION['id'];
	$rango=$_SESSION['rango'];
if("$rango" >= "2" ) {
}
		 else
		 {
			 header("Location: index.php?denegado=si");
		 }
	 }
	 else {
		 header("Location: login.php?errorlog=si");
	 }
 echo $encabezado;
 }
 ?> 