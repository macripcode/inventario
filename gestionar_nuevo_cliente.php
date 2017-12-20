<?php

include 'conexion.php';
include 'datos_BD.php';


$nombre_cliente=$_POST['nombre_cliente'];
$sello_cliente=$_POST['sello_cliente'];
$empaque_cliente=$_POST['empaque_cliente'];

$con=new Conexion($server,$username,$password,$bd);
$con->conectar();
$con->insertar_cliente($nombre_cliente,$sello_cliente,$empaque_cliente);
$con->cerrar();

echo "Cliente creado satisfactoriamente.";

?>