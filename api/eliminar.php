<?php
$conexion=new mysqli("localhost","root","","sistemaphp") or die("not conexionected".mysqli_conexionect_error());
//http://localhost:8080/sistema-php/api/eliminar.php?id=4

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

if(isset($_GET['id'])){
$id=$_GET['id'];

# $sql="DELETE FROM clientes WHERE `clientes`.`id` = 3";
$sql="DELETE FROM clientes WHERE `clientes`.`id` = $id";


$query=mysqli_query($conexion,$sql);
if($query)
{
echo "1 row deleted";
}
else
{
echo mysqli_error($conexion);
}
}

?>