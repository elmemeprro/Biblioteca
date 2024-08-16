<?php
include "conexion.php";
$cliente    = $_POST['cliente'];
$titulo     = $_POST['titulo'];
$pres       = $_POST['pres'];
$dev        = $_POST['dev'];


$sql = "SELECT id FROM clientes WHERE nombre = '$cliente'";

$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    $id = $row['id'];
    $sql = $conn -> query("INSERT INTO prestamos(cliente,titulo,pres,dev) VALUES('$cliente','$titulo','$pres','$dev')");

header('Location:interfaz_prestamos.php');
}else{
    header('Location:registro_prestamos.php?error=Esa Cuenta No Existente');
}

?>













<?php
//include "conexion.php";
//$cliente    = $_POST['cliente'];
//$titulo     = $_POST['titulo'];
//$pres       = $_POST['pres'];
//$dev        = $_POST['dev'];

//$sql = $conn -> query("INSERT INTO prestamos(cliente,titulo,pres,dev) VALUES('$cliente','$titulo','$pres','$dev')");

//header('Location:interfaz_prestamos.php');
?>