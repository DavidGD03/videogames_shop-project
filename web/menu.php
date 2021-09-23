<?php
$menu="<body>
<header><div class='header'>
            <div class='interno_header'>
                <div class='logo_contenedor'>
                    <h1><span> Virtual Game</span></h1>
					</div>
					<div class='logo_img'>
					<br/>
					<img src='control.png' alt='Logo' width=100px height=100px></img>
					<br/><br/><br/>
                </div>
				</div>
				</div>
</header>
    <nav class='navegacion'>
        <ul class='menu'>
            <li><a href='index.php'>Inicio</a>  </li>
			<li><a href='tienda.php'>Tienda</a>
                <ul class='sub-menu'> 
                    <li><a href='carrito.php'>Carrito</a></li>
					<li><a href='lista.php'>Lista de deseos</a></li>
                </ul> 
            </li>
            <li><a href='noticias.php'>Noticias</a></li>
			<li><a href='#'>Nosotros</a>
                <ul class='sub-menu'> 
				<li><a href='razonsocial.php'>Razón social</a></li>
                    <li><a href='mision.php'>Mision</a></li>
					<li><a href='vision.php'>Vision</a></li>
                </ul> 
            </li>
				";
if ( isset ( $_SESSION['nickname'] ) ) {
	$id=$_SESSION['id'];
	$rango=$_SESSION['rango'];
echo $menu;
	echo "<li><a href='perfil.php?user=".$id."'>Perfil</a>
	<ul class='sub-menu'> 
                    <li><a href='misjuegos.php'>Mis juegos</a></li>
					<li><a href='mismensajes.php'>Mis mensajes</a></li>
                </ul> 
				</li>
	";
	if("$rango" >= "2" ) {
		echo "<li><a href='admin/index.php'>Admin</a></li>";
	}
	echo "<li><a href='ayuda.php'>Ayuda</a></li>";
	echo "<li><a href='cerrar.php'>Salir</a></li>";
}
else
{
	echo $menu;
	echo "<li><a href='login.php'>Login</a></li>";
	echo "<li><a href='registrar.php'>Registro</a></li>";
}
	?>
</ul>
</nav>