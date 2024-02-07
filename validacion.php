<?php 
//validacion.php

if (isset($_POST)) {
	if ($_POST['usuario']=="yamirlopez2001@gmail.com" && $_POST['pass']=="cevix") {
		session_start();
		$_SESSION['usuario']=$_POST['usuario'];
		$_SESSION['login']=True;
		$_SESSION['hora']=time();
	}else{
		header("Location:index_sesiones.php?mensaje=error");
	}
}else{
	header("Location:index_sesiones.php");
}



?>