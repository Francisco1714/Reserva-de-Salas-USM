<?php
require 'conexion.php';
$consultar = "SELECT * FROM tbl_testeo";
$query =mysqli_query($conectar,consultar);
$array = mysqli_fetch_array($query);
?>