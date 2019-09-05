<?php

session_start();

$nombre = $_POST['nombre'];
$contra = $_POST['contra'];

$_SESSION['usuario'] = $nombre;
//Conectar a a base de datos

$conexion = mysqli_connect("localhost", "root", "", "bd_login");
$consulta="SELECT * FROM usuario WHERE nombre='$nombre' and contra='$contra'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("location:pagina2.php");
}
else{
    echo '<script>alert("error usuario incorrecto");</script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
