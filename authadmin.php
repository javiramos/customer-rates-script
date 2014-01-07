<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db
echo $_SESSION[usuario];
if( ($_POST[nick] == ' ') or ($_POST[pass] == ' ') )//comprobamos que las variables enviadas por el form de login.php tienen contenido
{
Header("Location: admin.php"); //estan vacías, volvemos al index
}else{

//comprobamos en la db si existe ese nick con esa pass
$usuarios=mysql_query("SELECT * FROM EMPRESAS WHERE user='$_POST[nick]' and password='$_POST[pass]' ");
if($datos = mysql_fetch_array($usuarios)) //si existe comenzamos con la sesion, si no, al index
{
session_start();
$_SESSION[usuario] = $datos["user"]; //damos el nick a la variable usuario
$_SESSION[idusuario] = $datos["id"]; //damos la id del user a la variable idusuario
Header("Location: ad-dashboard.php"); //volvemos al login donde nos saldrá nuestro menú de usuario

}else{
echo 'Nick y pass incorrectos';
}

} 
?>