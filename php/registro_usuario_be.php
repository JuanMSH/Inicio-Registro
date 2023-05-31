<?php

include 'conexion_be.php';


$nombre_completo = $_POST['Nombre_completo'];
$correo = $_POST['Correo'];
$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contrasena'];

$query = "INSERT INTO usuarios(Nombre_completo,Correo,Usuario,Contrasena)
VALUES ('$Nombre_completo','$Correo', '$Usuario', '$Contrasena')";

$ejecutar = mysqli_query($conexion, $query);

?>