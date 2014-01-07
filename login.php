<?php
include('config.php'); 

if(!isset($_SESSION[usuario])) {
	echo '<form action="auth.php" method="POST">
	Nick: <input type="text" name="nick" size="30"><br>
	Password: <input type="password" name="pass" size="30" ><br>
	<input type="submit" name="submit" value="Enviar"></form>';

}else{

	echo 'ya estas logueado';
	echo '<br><a href=logout.php>Salir</a>'; //link para deslogearse, iría a logout.php

}

?>