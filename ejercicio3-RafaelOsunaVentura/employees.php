<?php
include('conexion.php');

$use= 'use empresa';
$Borrar="drop table employees";
$CrearTabla="create table employees(
        idemployes int not null auto_increment, 
        name varchar(30),
        lastname varchar (30),
        address varchar(30),
        primary key (idemployes)
        )";

$Insertar1="insert into employees (name, lastname, address) values ('Rafa','Osuna','Moral')";
$Insertar2="insert into employees (name, lastname, address) values ('Miguel','Ventura','Ronda de Andujar')";
$Insertar3="insert into employees (name, lastname, address) values ('Antonio','Romero','Colon')";
$consulta="select lastname from employees";

mysqli_query($conn, $use);
mysqli_query($conn, $Borrar);
mysqli_query($conn, $CrearTabla);
mysqli_query($conn, $Insertar1);
mysqli_query($conn, $Insertar2);
mysqli_query($conn, $Insertar3);

$res=$conn->query($consulta);
if ($res){
    $fila = $res->fetch_assoc();
    echo 'Apellidos<br>';
    while ($fila){
        echo '<br>'.'<input type="radio">'.utf8_encode ($fila['lastname']).'<br>'.'</input>';
        $fila=$res->fetch_assoc();
    }
    $res->close();
}
$conn->close();

?>


