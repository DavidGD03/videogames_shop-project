<body>
<header><div class='header'>
            <div class='interno_header'>
                <div class='logo_contenedor'>
                    <h1>Administraci&oacute;n</h1>
					</div>
					<div class='logo_img'>
					<br/>
					<img src='../control.png' alt='Logo' width=100px height=100px></img>
                </div>
				</div>
				</div>
</header>
    <nav class='navegacion'>
<?php
		if ( isset ( $_SESSION['nickname'] ) ) {
$rango=$_SESSION["rango"];
			if("$rango" == "1"){
				header("Location: index.php");
				exit();
			}
if ("$rango" == "2") {
echo "<ul class='menu'>
            <li><a href='index.php'>Inicio</a> 
            </li>

            <li><a href='#'>Agregar</a>
                <ul class='sub-menu'> 
                    <li><a href='../inserciones/crearusuario.php'>Usuario</a></li>
					<li><a href='../inserciones/crearjuego.php'>Juego</a></li>
                </ul> 
            </li>

            <li><a href='#'>Consultar</a>
                <ul class='sub-menu'> 
                    <li><a href='../consultas/verusuario.php'>Usuarios</a></li>
					<li><a href='../consultas/verjuego.php'>Juegos</a></li>
					<li><a href='../consultas/verreclamo.php'>Reclamos</a></li>
                </ul> 
            </li>  

 ";
}
		if ("$rango" == "3") {
			echo "<ul class='menu'>
            <li><a href='index.php'>Inicio</a> 
            </li>

            <li><a href='#'>Agregar</a>
                <ul class='sub-menu'> 
                    <li><a href='../inserciones/crearnoticia.php'>Noticia</a></li>
					<li><a href='../inserciones/crearjuego.php'>Juego</a></li>
                </ul> 
            </li>

            <li><a href='#'>Consultar</a>
                <ul class='sub-menu'> 
                    <li><a href='../consultas/verusuario.php'>Usuarios</a></li>
					<li><a href='../consultas/verjuego.php'>Juegos</a></li>
                </ul> 
            </li>  

 ";}
		if ("$rango" == "4") {
			echo "<ul class='menu'>
            <li><a href='index.php'>Inicio</a> 
            </li>

            <li><a href='#'>Agregar</a>
                <ul class='sub-menu'> 
                    <li><a href='../inserciones/crearempleado.php'>Empleado</a></li>
                    <li><a href='../inserciones/crearusuario.php'>Usuario</a></li>
					<li><a href='../inserciones/crearjuego.php'>Juego</a></li>
					<li><a href='../inserciones/crearfactura.php'>Factura</a></li>
					<li><a href='../inserciones/crearreclamo.php'>Reclamo</a></li>
					<li><a href='../inserciones/crearnoticia.php'>Noticia</a></li>
                </ul> 
            </li>

            <li><a href='#'>Consultar</a>
                <ul class='sub-menu'> 
                    <li><a href='../consultas/verempleado.php'>Empleados</a></li>
                    <li><a href='../consultas/verusuario.php'>Usuarios</a></li>
					<li><a href='../consultas/verjuego.php'>Juegos</a></li>
					<li><a href='../consultas/verfactura.php'>Facturas</a></li>
					<li><a href='../consultas/verreclamo.php'>Reclamos</a></li>
                </ul> 
            </li>  

 ";
		}}
		else {
			header("Location: ../login.php?errorlog=si");
		}
	?>
		<li><a href='../index.php'>Volver</a></li>
		<li><a href='../cerrar.php'>Salir</a></li>
		</ul>
		</nav>
 <br/><br/>