<?php
include "conexion.php";
$id=$_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editor = $_POST['editor'];
$año = $_POST['año'];

$sql = $conn -> query("UPDATE libros SET titulo='$titulo',autor='$autor',editor='$editor',año='$año' WHERE id= '$id' ");

header('Location:interfaz_libros.php');

?>