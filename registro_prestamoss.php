<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$fechap = $_POST['fechap'];
$fechad = $_POST['fechad'];

    $sql = $conn -> query("INSERT INTO prestamos(nombre,titulo,fechap,fechad) VALUES('$nombre','$titulo','$fechap','$fechad'
)");

header('Location:interfaz_prestamos.php');
?>