
<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db

if(isset($_SESSION[usuario]))  {
	
	echo '<a href="#">cambiar precios</a><br />
<a href="#">categorias</a><br />
<a href="#">productos</a><br />';


$query = "SELECT * FROM CATEGORIAS WHERE idcliente='$_SESSION[idcliente]'";

if ($result = $mysqli->query($query)) {

    /* obtener array asociativo */
    while ($row = $result->fetch_assoc()) {
        echo '<br />'.$row["nombre"].'<hr>';
        
             $query2 = "SELECT * FROM PRODUCTOS WHERE idcategoria='$row[id]'";

        $result2 = $mysqli->query($query2);
        $margen = '1.' . $row["margen"];

    while ($row2 = $result2->fetch_assoc()) {
    	$precio = $row2["precio"];
    	$preciofinal = $margen*$precio;
    	
        echo ''.$row2["nombre"].' | '.$preciofinal.' <br />';

    }	
        
        
        
    }

    /* liberar el resultset */
    $result->free();
}

}
else { echo 'no estas logueado'; }
?>