<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
/*
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");
*/

$conexion=new mysqli("localhost","root","","sistemaphp") or die("not conexionected".mysqli_conexionect_error());

//http://localhost:8080/sistema-php/api/consultar.php?nombre=Lucas&apellido=Tello&email=asdasd@asdasd.com&telefono=2394729857&detalle=mdhalq


# $sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, 'Lucas', 'Moy', 'lucas@gmail.com', '76572451285', 'Prueba de Sistema');";
$sql="SELECT * FROM `clientes`";

$result=mysqli_query($conexion,$sql);

/*while($fila=mysqli_fetch_array($result)){
  //echo $fila[0];
  echo $fila['nombre']." ".$fila['apellido'];
  echo '<br />';
}*/

$clientes=array();
while($fila=mysqli_fetch_array($result)){
  array_push($clientes,$fila);
}
echo json_encode($clientes);

mysqli_free_result($result);
mysqli_close($conexion);

?>