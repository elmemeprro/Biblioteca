<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

    $sql = $conn -> query("INSERT INTO clientes(nombre,apellido,dpi,telefono,correo) VALUES('$nombre','$apellido','$dpi','$telefono','$correo'
)");

header('Location:interfaz.php');
?>