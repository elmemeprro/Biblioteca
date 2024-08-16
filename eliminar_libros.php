<?php
include "conexion.php";
$id=$_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editor = $_POST['editor'];
$año = $_POST['año'];

$sql = $conn -> query("DELETE FROM libros WHERE id= '$id' ");
header('Location:interfaz_libros.php');
?>