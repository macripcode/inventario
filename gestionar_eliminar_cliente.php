<?php

include 'conexion.php';
include 'datos_BD.php';


$codigo_cliente=$_POST['codigo_cliente'];


$con=new Conexion($server,$username,$password,$bd);
$con->conectar();
$con->eliminar_gestionar_cliente($codigo_cliente);
$con->cerrar();

echo "Cliente eliminado satisfactoriamente.";

?>