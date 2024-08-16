<?php
include "conexion.php";
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editor = $_POST['editor'];
$año = $_POST['año'];

    $sql = $conn -> query("INSERT INTO libros(titulo,autor,editor,año) VALUES('$titulo','$autor','$editor','$año'
)");

header('Location:interfaz.php');
?>