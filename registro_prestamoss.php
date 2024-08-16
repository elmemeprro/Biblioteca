<?php
include "conexion.php";
$nombre = $_POST['fk_cliente'];
$titulo = $_POST['fk_titulo'];
$fechap = $_POST['fecha_de_pres'];
$fechad = $_POST['fecha_de_dev'];

$sql = "SELECT * FROM clientes WHERE nombre ='$nombre'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['nombre']===$nombre){
        $sql = $conn -> query("INSERT INTO prestamos(fk_cliente,fk_titulo,fecha_de_pres,fecha_de_dev) VALUES('$nombre','$titulo','$fechap','$fechad'
)");
header('Location:interfaz_prestamos.php');
    
    }else{
        //header("Location: index.php?error=Usuario/contraseña incorrecta");
        header('Location: registro_prestamos.php?error=El cliente no existe');
        
    }
}else{
    //header("Location: index.php?error=Usuario/contraseña incorrecta");
    header('Location: registro_prestamos.php?error=El cliente no existe');
}
?>





