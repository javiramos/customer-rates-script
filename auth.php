<?php
include('config.php'); 
echo $_SESSION[usuario];

if( ($_POST[nick] == ' ') or ($_POST[pass] == ' ')) {
	Header("Location: login.php"); //estan vacías, volvemos al index
}else{
	$usuarios=mysql_query("SELECT * FROM CLIENTES WHERE user='$_POST[nick]' and password='$_POST[pass]' ");
	
	if($datos = mysql_fetch_array($usuarios)) {
		session_start();
		$_SESSION[cliente] = $datos["user"]; //damos el nick a la variable usuario
		$_SESSION[idcliente] = $datos["id"]; //damos la id del user a la variable idusuario
		Header("Location: dashboard.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
	
	}else{
echo 'Nick y pass incorrectos';
	}

} 
?>