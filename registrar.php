<?php
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dpi = $_POST['dpi'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = md5($_POST['contraseña']);

   
    $sql = "SELECT * FROM registrar WHERE usuario='$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('Location:registrousuario.php?error=Esa Cuenta ya Existente');
    } else {
      
        $sql = "INSERT INTO registrar (nombre, apellido, dpi, telefono, correo, usuario, contraseña) VALUES ('$nombre', '$apellido','$dpi','$telefono','$correo','$usuario', '$contraseña')";
        if ($conn->query($sql) === TRUE) {
            header('Location:index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>