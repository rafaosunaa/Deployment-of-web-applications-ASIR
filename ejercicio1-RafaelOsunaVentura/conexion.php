<?php
//Conexión de php con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$bd = "empresa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $bd);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>