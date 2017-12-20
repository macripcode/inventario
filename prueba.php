<?php

include 'datos_BD.php';

$con=mysqli_connect($server,$username,$password, $bd) 
		 	or die('No se pudo conectar: '.mysql_error($this->con));
$con->set_charset("utf8");
$query="insert into `cliente`(`cliente`, `sello`, `empaque`) values ('ña','ña', 'ña' );";
 mysqli_query($con,$query) or die('Consulta fallida: '.mysqli_error($this->con));

?>