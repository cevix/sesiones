
<?php  
//sesion.php

session_start();

if (!$_SESSION['login']) {
	session_destroy();
	header("Location:index_sesiones.php")
}

if ($_SESSION['hora']=20<time()) {
	session_destroy();
	header("Location:index_sesiones.php?mensaje=caduca");
}

if (isset($_SESSION['timeout'])) {
	$vida_sesion=time()-$_SESSION['timeout'];
	if ($vida_sesion>5) {
		session_destroy();
		header("Location:index_sesiones.php?mensaje=inactivo");
	}
}


?>