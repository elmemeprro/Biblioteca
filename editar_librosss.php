<?php
include "conexion.php";
$id=$_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editor = $_POST['editor'];
$a = $_POST['año'];

$sql = $conn -> query("UPDATE clientes SET titulo='$titulo',autor='$autor',editor='$editor',año='$a' WHERE id= '$id' ");

header('Location:interfaz.php');

?>