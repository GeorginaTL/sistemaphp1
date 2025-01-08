<?php
$conexion=new mysqli("localhost","root","","sistemaphp") or die("not conexionected".mysqli_conexionect_error());
//http://localhost:8080/sistema-php/api/?nombre=Lucas&apellido=Tello&email=asdasd@asdasd.com&telefono=2394729857&detalle=mdhalq
//http://localhost:8080/sistema-php/api/index.php?nombre=Lucas&apellido=Tello&email=asdasd@asdasd.com&telefono=2394729857&detalle=mdhalq

/*
$nombre="Pedro";
$apellido="Gonzalez";
$email="pedro.g123@gmail.com";
$telefono="9541427375";
$detalle="";

# $sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, 'Lucas', 'Moy', 'lucas@gmail.com', '76572451285', 'Prueba de Sistema');";
$sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";


$query=mysqli_query($conexion,$sql);
if($query)
  {
  echo "1 row inserted";
  }
else
  {
  echo mysqli_error($conexion);
  }
*/

if(isset($_GET['nombre'])){
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$detalle=$_GET['detalle'];

# $sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, 'Lucas', 'Moy', 'lucas@gmail.com', '76572451285', 'Prueba de Sistema');";
$sql="INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";


$query=mysqli_query($conexion,$sql);
if($query)
{
echo "1 row inserted";
}
else
{
echo mysqli_error($conexion);
}
}

?>