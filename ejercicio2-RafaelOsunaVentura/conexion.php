<?php
//Conexión de php con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$bd = "empresa";

// Crear conexion
$conn = mysqli_connect($servername, $username, $password, $bd);
// Comprobar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>