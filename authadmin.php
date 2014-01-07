<?php
include('config.php'); 
if( ($_POST[nick] == ' ') or ($_POST[pass] == ' ')) {
	Header("Location: admin.php"); //estan vacías, volvemos al index
}else{
	$usuarios=mysql_query("SELECT * FROM EMPRESAS WHERE user='$_POST[nick]' and password='$_POST[pass]' ");
	if($datos = mysql_fetch_array($usuarios)) {
		session_start();
		$_SESSION[usuario] = $datos["user"]; //damos el nick a la variable usuario
		$_SESSION[idusuario] = $datos["id"]; //damos la id del user a la variable idusuario
		Header("Location: ad-dashboard.php"); //volvemos al login donde nos saldrá nuestro menú de usuario
}else{
	echo 'Nick y pass incorrectos';
}

} 
?>