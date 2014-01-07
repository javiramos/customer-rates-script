
<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db

if(isset($_SESSION[usuario]))  {
$result = mysqli_query("SELECT * FROM PRODUCTOS WHERE id='1'");

while($row = mysqli_fetch_array($result))
  {
  echo $row['id'] . " " . $row['nombre'];
  echo "<br>";
  }


}
else { echo 'no estas logueado'; }
?>