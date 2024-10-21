<html>
    <head>
    <style>
        table, td{
        border-collapse: collapse;
        border: solid 2px black;
        }
    </style>
    </head>
    <body>
    
<?php

include('conexion.php');

$Borrar="drop table productos;";
$CrearTabla="create table productos(productid int not null auto_increment, productname varchar(25), unitsinstock int(20), primary key (productid));";
$Introducir1="insert into productos (productname, unitsinstock) values ('monitor', 23);";
$Introducir2="insert into productos (productname, unitsinstock) values ('memoriaram', 134);";
$Introducir3="insert into productos (productname, unitsinstock) values ('raton', 30);";
$Introducir4="insert into productos(productname, unitsinstock) values ('alfombrilla', 777);";
$consulta="select* from productos where unitsinstock<100;";

mysqli_query($conn, $Borrar);
mysqli_query($conn, $CrearTabla);
mysqli_query($conn, $Introducir1);
mysqli_query($conn, $Introducir2);
mysqli_query($conn, $Introducir3);
mysqli_query($conn, $Introducir4);

$res=$conn->query($consulta);
if ($res){
    $fila = $res->fetch_assoc();
    echo '<table>';
    echo '<tr><td>productid</td><td>productname</td><td>unitsinstock</td>';
    while ($fila){
        echo '<tr><td>'.utf8_encode($fila['productid']).'</td><td>'.utf8_encode($fila['productname']).'</td><td>'. utf8_encode($fila['unitsinstock']);
        $fila=$res->fetch_assoc();
    }
    echo '</table>';
    $res->close();
}
$conn->close();

?>

</body>
</html>