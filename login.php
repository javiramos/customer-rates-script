
<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db

if(!isset($_SESSION[usuario]) ) //comprobamos que no existe la session, es decir, que no se ha logeado, y mostramos el form
{

//Creamos el form k irá a autentificar.php para comprobar los datos con la tabla users
echo '<form action="auth.php" method="POST">
Nick: <input type="text" name="nick" size="30"><br>
Password: <input type="password" name="pass" size="30" ><br>
<input type="submit" name="submit" value="Enviar"></form>';

}else{

echo 'ya estas logueado';

echo '<br><a href=logout.php>Salir</a>'; //link para deslogearse, iría a logout.php

}

?>